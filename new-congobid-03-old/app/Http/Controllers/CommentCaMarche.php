<?php

namespace App\Http\Controllers;

use App\Models\instructuion;
use App\Models\Statut;
use App\Models\Chat;
use App\Models\Historique;
use App\Models\Instruction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentCaMarche extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('How');
        $instructions = Instruction::orderBy('id', 'desc')->get();
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();

        return view('admin.instructions', compact('instructions', 'chats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();
        $statuts = Statut::orderBy('id', 'desc')->get();

        return view('admin.layouts.partials.body.instructions.create', compact('chats', 'statuts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            

            $instruction = Instruction::create([
                'titre' => $request->titre,
                'description' => $request->description,
                'lien' => null,
                'statut_id' => $request->statut_id,
                'user_id' => Auth::user()->id,
            ]);

            if ($request->file('videos') != null) {
                # code...
                $ext = $request->file('videos')->getClientOriginalExtension();
                $request->file('videos')->move(public_path('videos/instructions/'), $instruction->id. '.'.$ext);
                $instruction->update([
                    'lien'=> $instruction->id. '.'.$ext
                ]);
            }


            Historique::create([
                'action' => 'Enregistrement d\'une instruction',
                'type' => '12',
                'destination_id' => $instruction->id,
                'statut_id' => '3',
                'user_id' => Auth::user()->id,
            ]);

            return redirect()->route('commentcamarche.index');
        } catch(\Exception $e){
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $instruction = Instruction::where('id', $id)->first();
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();
        $statuts = Statut::orderBy('id', 'desc')->get();

        return view('admin.layouts.partials.body.instructions.edit', compact('chats', 'statuts', 'instruction'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // try{

            if ($request->videos != null) {
                Instruction::where('id', $request->instruction_id)->update([
                    'titre' => $request->titre,
                    'description' => $request->description,
                    'lien' => $request->instruction_id,
                    'statut_id' => $request->statut_id,
                    'user_id' => Auth::user()->id,
                ]);
                $request->file('videos')->move(public_path('videos/instructions/'), $request->id. '.mp4');
            } else {
                Instruction::where('id', $request->instruction_id)->update([
                    'titre' => $request->titre,
                    'description' => $request->description,
                    'statut_id' => $request->statut_id,
                    'user_id' => Auth::user()->id,
                ]);
            }

            Historique::create([
                'action' => 'Modificaion d\'une instruction',
                'type' => '12',
                'destination_id' => $request->instruction_id,
                'statut_id' => '3',
                'user_id' => Auth::user()->id,
            ]);

            return redirect()->route('commentcamarche.index');
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
        try{
            Instruction::where('id', $id)->update([
                'statut_id' => $state == '3' ? 2 : 3,
                'deleted_at' => $state == '3' ? now() : NULL,
                'id_deleted_at' => $state == '3' ? Auth::user()->id : NULL,
                'id_updated_at' => Auth::user()->id,
            ]);

            if ($state == 3) {
                $action = 'Suppression d\'une nstruction';
            } else if($state == 2) {
                $action = 'Réactivation d\'une nstruction';
            }else {
                $action = 'Activation d\'une nstruction';
            }

            Historique::create([
                'action' => $action,
                'type' => '12',
                'destination_id' => $id,
                'statut_id' => '3',
                'user_id' => Auth::user()->id,
            ]);

            return redirect()->route('instructions.index');
        } catch(\Exception $e){
            return back()->with('');
        }
    }
}
