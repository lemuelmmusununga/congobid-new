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
        $article = Article::where('id', $id)->get();
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
        // try{
        $articlesCount = Article::all()->count();
        $request->code_produit = $request->categorie_id . Auth::user()->id . now()->format('dmY') . now()->format('His') . $articlesCount + 1;
        $paquets = Paquet::where('statut_id', '3')->get();

        $paquet_id = 1;

        foreach ($paquets as $key => $paquet) {
            if ((($request->prix) >= $paquet->min) && (($request->prix) <= $paquet->max)) {
                $paquet_id = $paquet->id;
            }
        }

        $article = Article::where('id', $request->article_id)->update([
            'titre' => $request->titre,
            'marque' => $request->marque,
            'promouvoir' => $request->promouvoir == "on" ? 1 : 0,
            'code_produit' => $request->code_produit,
            'description' => $request->description,
            'prix' => $request->prix,
            'prix_marche' => $request->prix_marche,
            'prix_min' => $request->prix_marche / 3,
            'prix_max' => $request->prix_marche / 2,
            'cout_livraison' => $request->cout_livraison,
            'infos_livraison' => $request->infos_livraison,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,

            'limite_enchere_auto' => $request->limite_enchere_auto,
            'credit_enchere_auto' => $request->credit_enchere_auto,
            'code_produit' => $request->code_produit,
            'quantite' => $request->quantite,
            'categorie_id' => $request->categorie_id,
            'statut_id' => $request->statut_id,
            'user_id' => Auth::user()->id,
            'paquet_id' => $paquet_id,
        ]);

        if ($request->file('image') != null) {

            foreach ($request->file('image') as $key => $image) {
                # code...
            }



            $request->file('image')->move(public_path('images/articles/'), $request->titre . '.webp');

        }

        Salon::where('article_id', $request->article_id)->update([
            'libelle' => 'Salon #' . $request->article_id,
            'statut_id' => $request->statut_id,
            'article_id' => $request->article_id,
        ]);

        Enchere::where('article_id', $request->article_id)->update([
            'click' => 0,
            'date_debut' => $request->debut_enchere,

            'munite' => Str::substr($request->fin_enchere, 0, 2),
            'seconde' => Str::substr($request->fin_enchere, 4, 8),
            'state' => 0,
            'statut_id' => $request->statut_id,
            'article_id' => $request->article_id,
            'paquet_id' => $paquet_id,
        ]);

        Historique::create([
            'action' => 'Modification d\'un article',
            'type' => '5',
            'destination_id' => $request->article_id,
            'statut_id' => '3',
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('articles.index');
        // } catch(\Exception $e){
        //     return back()->with('');
        // }
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
