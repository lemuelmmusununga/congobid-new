<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use App\Models\Image;
use App\Models\Salon;
use App\Models\Statut;
use App\Models\Historique;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Chat;
use App\Models\Enchere;
use App\Models\Paquet;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('id', 'desc')->get();
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();

        return view('admin.articles', compact('articles', 'chats'));
    }

    public function indexfilter($id)
    {
        $articles = Article::where('user_id', $id)->orderBy('id', 'desc')->get();
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();

        return view('admin.articles', compact('articles', 'chats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $statuts = Statut::orderBy('id', 'desc')->get();
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();
        $categories = Categorie::all();

        return view('admin.layouts.partials.body.articles.create', compact('statuts', 'chats', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {
            $articlesCount = Article::all()->count();
            $code_produit = $request->categorie_id . Auth::user()->id . now()->format('dmY') . now()->format('His') . $articlesCount + 1;

            $article = Article::create([
                'titre' => $request->titre,
                'marque' => $request->marque,
                'promouvoir' => $request->promouvoir == "on" ? 1 : 0,
                'code_produit' => $code_produit,
                'description' => $request->description,
                'prix' => $request->prix,
                'prix_marche' => $request->prix_marche,
                'quantite' => $request->quantite,
                'categorie_id' => $request->categorie_id,
                'statut_id' => $request->statut_id,
                'user_id' => Auth::user()->id,
            ]);

            if ($request->file('image') != null) {
                foreach ($request->file('image') as $key => $image) {
                    $ext = $image->getClientOriginalExtension();
                    # code...
                    Image::create([
                        'lien' => $article->id . '_' . $key . '.' . $ext,
                        'statut_id' => "1",
                        'user_id' => Auth::user()->id,
                        'article_id' => $article->id,
                    ]);

                    $image->move(public_path('images/articles/'), $article->id . '_' . $key . '.' . $ext);
                }
            }


            Historique::create([
                'action' => 'Enregistrement d\'un article',
                'type' => '5',
                'destination_id' => $article->id,
                'statut_id' => '3',
                'user_id' => Auth::user()->id,
            ]);

            return redirect()->route('articles.index');
        } catch (\Exception $e) {
            dd($e);
            return back()->with('');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();

        return view('admin.layouts.partials.body.articles.show', compact('article', 'chats'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        $statuts = Statut::orderBy('id', 'desc')->get();
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();
        $categories = Categorie::all();

        return view('admin.layouts.partials.body.articles.edit', compact('article', 'statuts', 'chats', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request);
        try{
        $articlesCount = Article::all()->count();
        $code_produit = $request->categorie_id . Auth::user()->id . now()->format('dmY') . now()->format('His') . $articlesCount + 1;
        $paquets = Paquet::where('statut_id', '3')->get();

        $paquet_id = 1;

        foreach ($paquets as $key => $paquet) {
            if ((($request->prix) >= $paquet->min) && (($request->prix) <= $paquet->max)) {
                $paquet_id = $paquet->id;
            }
        }

        $article = Article::find($request->article_id);
        
        $article->update([
            'titre' => $request->titre,
            'marque' => $request->marque,
            'promouvoir' => $request->promouvoir == "on" ? 1 : 0,
            'code_produit' => $code_produit,
            'description' => $request->description,
            'prix' => $request->prix,
            'prix_marche' => $request->prix_marche,
            'quantite' => $request->quantite,
            'categorie_id' => $request->categorie_id,
            'statut_id' => $request->statut_id,
            'user_id' => Auth::user()->id,
            'paquet_id'=> $paquet_id
        ]);

        if ($request->file('image') != null) {
            foreach ($request->file('image') as $key => $image) {
                $ext = $image->getClientOriginalExtension();
                $nb = $article->images->count();
                $key = $nb;
                # code...
                Image::create([
                    'lien' => $article->id . '_' . $key . '.' . $ext,
                    'statut_id' => "1",
                    'user_id' => Auth::user()->id,
                    'article_id' => $article->id,
                ]);

                $image->move(public_path('images/articles/'), $article->id . '_' . $key . '.' . $ext,true);
            }
        }


        Historique::create([
            'action' => 'Modification de l\'article '.$article->titre,
            'type' => '5',
            'destination_id' => $article->id,
            'statut_id' => '3',
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('articles.index')->with('success','La modification a réussi');
        } catch(\Exception $e){
            return back()->with('error', 'Une erreur est survenue');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $state)
    {
        // try{
        Article::where('id', $id)->update([
            'statut_id' => $state == '3' ? 2 : 3,
            'deleted_at' => $state == '3' ? now() : NULL,
            'id_deleted_at' => $state == '3' ? Auth::user()->id : NULL,
            'id_updated_at' => Auth::user()->id,
        ]);

        Image::where('article_id', $id)->update([
            'statut_id' => $state == '3' ? 2 : 3,
            'deleted_at' => $state == '3' ? now() : NULL,
            'id_deleted_at' => $state == '3' ? Auth::user()->id : NULL,
            'id_updated_at' => Auth::user()->id,
        ]);

        Salon::where('article_id', $id)->update([
            'statut_id' => $state == '3' ? 2 : 3,
            'deleted_at' => $state == '3' ? now() : NULL,
            'id_deleted_at' => $state == '3' ? Auth::user()->id : NULL,
            'id_updated_at' => Auth::user()->id,
        ]);
        $enchere = Enchere::where('article_id', $id)->first();
        $enchere->update([
            'statut_id' => $state == '3' ? 2 : 3,
            'deleted_at' => $state == '3' ? now() : NULL,
            'id_deleted_at' => $state == '3' ? Auth::user()->id : NULL,
            'id_updated_at' => Auth::user()->id,
            'state' => $enchere->state == 1 ? '0' : '1'
        ]);

        if ($state == 3) {
            $action = 'Suppression d\'un article';
        } else if ($state == 2) {
            $action = 'Réactivation d\'un article';
        } else {
            $action = 'Activation d\'un article';
        }

        Historique::create([
            'action' => $action,
            'type' => '5',
            'destination_id' => $id,
            'statut_id' => '3',
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('articles.index');
        // } catch(\Exception $e){
        //     return back()->with('');
        // }
    }
}
