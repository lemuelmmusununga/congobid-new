<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use App\Models\Statut;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Chat;
use App\Models\Historique;
use Illuminate\Support\Facades\Auth;
use App\Models\Promotion;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsletters = Newsletter::orderBy('id', 'desc')->get();
        $promotions = Promotion::orderBy('id', 'desc')->get();
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();

        return view('admin.newsletters', compact('newsletters', 'promotions', 'chats'));
    }

    public function indexfilter($id)
    {
        $newsletters = Newsletter::orderBy('id', 'desc')->get();
        // $promotions = Promotion::where('user_id', $id)->orderBy('id', 'desc')->get();
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();

        return view('admin.newsletters', compact('newsletters', 'chats'));
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

        return view('admin.layouts.partials.body.newsletters.create', compact('statuts', 'chats'));
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
            // dd($request);
            Newsletter::create([
                "subject" => $request->subject,
                "message" => $request->message,
                "statut_id" => $request->statut_id,
                "user_id" => Auth::user()->id,
            ]);

            // $contenu = [
            //     'title' => $request->sujet,
            //     'body' => $request->message,
            // ];

            // $emails = Newsletter::where('statut_id', '3')->get();

            // foreach ($emails as $key => $email) {
            //     \Mail::to($email->email)->send(new \App\Mail\NewsletterMail($contenu));
            // }

            // Historique::create([
            //     'action' => $request->statut_id == '3' ? 'Envoie d\'un e-mail' : 'Enregistrement d\'un e-mail',
            //     'type' => '6',
            //     'destination_id' => $mail->id,
            //     'statut_id' => '3',
            //     'user_id' => Auth::user()->id,
            // ]);

            return redirect()->route('newsletters.index');
        } catch (\Exception $e) {
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
        $newsletter = Newsletter::find($id);
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();
        $users = User::all();

        return view('admin.layouts.partials.body.newsletters.show', compact('newsletter', 'chats', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $newsletter = newsletter::find($id);
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();
        $statuts = Statut::orderBy('id', 'desc')->get();

        return view('admin.layouts.partials.body.newsletters.edit', compact('newsletter', 'chats', 'statuts'));
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
        try {
            $newsletter = Newsletter::find($request->newsletter_id);
            $newsletter->update([
                "subject" => $request->subject,
                "message" => $request->message,
                "statut_id" => $request->statut_id,
            ]);
            return redirect()->route('newsletters.index');

        } catch (\Throwable $th) {
            //throw $th;
            // dd($th);
            return back()->with('');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function sendnews(Request $request)
    {
        try {
            //code...
            $newsletter = Newsletter::find($request->newsletter_id);
            $contenu = [
                'title' => $newsletter->subject,
                'body' => $newsletter->message,
            ];
            if ($request->type == 'user') {
                if ($newsletter->destination == null) {
                    # code...
                    $destination = [];
                    $destination[] = $request->user_id;
                    $newsletter->update([
                        'destination' => json_encode($destination)
                    ]);
                    $user = User::find($request->user_id);
                    // \Mail::to($user->email)->send(new \App\Mail\NewsletterMail($contenu));
                    // Historique::create([
                    //     'action' => 'Envoie d\'un e-mail',
                    //     'type' => '6',
                    //     'destination_id' => $user->id,
                    //     'statut_id' => '3',
                    //     'user_id' => Auth::user()->id,
                    // ]);
                } else {
                    # code...
                    $destination = json_decode($newsletter->destination);
                    $destination[] = $request->user_id;
                    $newsletter->update([
                        'destination' => json_encode($destination)
                    ]);
                    $user = User::find($request->user_id);
                    // \Mail::to($user->email)->send(new \App\Mail\NewsletterMail($contenu));
                    // Historique::create([
                    //     'action' => 'Envoie d\'un e-mail',
                    //     'type' => '6',
                    //     'destination_id' => $user->id,
                    //     'statut_id' => '3',
                    //     'user_id' => Auth::user()->id,
                    // ]);
                }
            } else {
                if ($newsletter->destination == null) {
                    # code...
                    $destination = [];
                    switch ($request->destination) {
                        case '1':
                            $users = User::where('role_id', '>', '3')->get();
                            foreach ($users as $user) {
                                # code...
                                // \Mail::to($user->email)->send(new \App\Mail\NewsletterMail($contenu));
                                // Historique::create([
                                //     'action' => 'Envoie d\'un e-mail',
                                //     'type' => '6',
                                //     'destination_id' => $user->id,
                                //     'statut_id' => '3',
                                //     'user_id' => Auth::user()->id,
                                // ]);
                                $destination[] = $user->id;
                            }
                            break;
                        case '2':
                            $users = User::where('last_seen', '>=', now()->startOfDay())->get();
                            foreach ($users as $user) {
                                # code...
                                // \Mail::to($user->email)->send(new \App\Mail\NewsletterMail($contenu));
                                // Historique::create([
                                //     'action' => 'Envoie d\'un e-mail',
                                //     'type' => '6',
                                //     'destination_id' => $user->id,
                                //     'statut_id' => '3',
                                //     'user_id' => Auth::user()->id,
                                // ]);
                                $destination[] = $user->id;
                            }
                            break;
                        case '3':
                            $users = User::whereBetween('created_at', [now()->startOfMonth(), now()->endOfMonth()])->get();
                            foreach ($users as $user) {
                                # code...
                                // \Mail::to($user->email)->send(new \App\Mail\NewsletterMail($contenu));
                                // Historique::create([
                                //     'action' => 'Envoie d\'un e-mail',
                                //     'type' => '6',
                                //     'destination_id' => $user->id,
                                //     'statut_id' => '3',
                                //     'user_id' => Auth::user()->id,
                                // ]);
                                $destination[] = $user->id;
                            }
                            break;
                        case '4':
                            $users = User::where('last_seen', '<', now()->subMonth())->get();
                            foreach ($users as $user) {
                                # code...
                                // \Mail::to($user->email)->send(new \App\Mail\NewsletterMail($contenu));
                                // Historique::create([
                                //     'action' => 'Envoie d\'un e-mail',
                                //     'type' => '6',
                                //     'destination_id' => $user->id,
                                //     'statut_id' => '3',
                                //     'user_id' => Auth::user()->id,
                                // ]);
                                $destination[] = $user->id;
                            }
                            break;
                        default:
                            # code...
                            break;
                    }
                    $newsletter->update([
                        'destination' => json_encode($destination)
                    ]);
                } else {
                    # code...
                    $destination = json_decode($newsletter->destination);
                    switch ($request->destination) {
                        case '1':
                            $users = User::where('role_id', '>', '3')->get();
                            foreach ($users as $user) {
                                # code...
                                // \Mail::to($user->email)->send(new \App\Mail\NewsletterMail($contenu));
                                // Historique::create([
                                //     'action' => 'Envoie d\'un e-mail',
                                //     'type' => '6',
                                //     'destination_id' => $user->id,
                                //     'statut_id' => '3',
                                //     'user_id' => Auth::user()->id,
                                // ]);
                                $destination[] = $user->id;
                            }
                            break;
                        case '2':
                            $users = User::where('last_seen', '>=', now()->startOfDay())->get();
                            foreach ($users as $user) {
                                # code...
                                // \Mail::to($user->email)->send(new \App\Mail\NewsletterMail($contenu));
                                // Historique::create([
                                //     'action' => 'Envoie d\'un e-mail',
                                //     'type' => '6',
                                //     'destination_id' => $user->id,
                                //     'statut_id' => '3',
                                //     'user_id' => Auth::user()->id,
                                // ]);
                                $destination[] = $user->id;
                            }
                            break;
                        case '3':
                            $users = User::whereBetween('created_at', [now()->startOfMonth(), now()->endOfMonth()])->get();
                            foreach ($users as $user) {
                                # code...
                                // \Mail::to($user->email)->send(new \App\Mail\NewsletterMail($contenu));
                                // Historique::create([
                                //     'action' => 'Envoie d\'un e-mail',
                                //     'type' => '6',
                                //     'destination_id' => $user->id,
                                //     'statut_id' => '3',
                                //     'user_id' => Auth::user()->id,
                                // ]);
                                $destination[] = $user->id;
                            }
                            break;
                        case '4':
                            $users = User::where('last_seen', '<', now()->subMonth())->get();
                            foreach ($users as $user) {
                                # code...
                                // \Mail::to($user->email)->send(new \App\Mail\NewsletterMail($contenu));
                                // Historique::create([
                                //     'action' => 'Envoie d\'un e-mail',
                                //     'type' => '6',
                                //     'destination_id' => $user->id,
                                //     'statut_id' => '3',
                                //     'user_id' => Auth::user()->id,
                                // ]);
                                $destination[] = $user->id;
                            }
                            break;
                        default:
                            # code...
                            break;
                    }
                    $newsletter->update([
                        ['destination' => json_encode($destination)]
                    ]);
                }
            }
            return redirect()->route('newsletters.index');
        } catch (\Throwable $th) {
            // dd($th);
            return back()->with('');
            //throw $th;
        }
    }
    public function destroy($id, $state)
    {
        try {
            Newsletter::where('id', $id)->update([
                'statut_id' => $state == '3' ? 2 : 3,
                'deleted_at' => $state == '3' ? now() : NULL,
                'id_deleted_at' => $state == '3' ? Auth::user()->id : NULL,
                'id_updated_at' => Auth::user()->id,
            ]);

            if ($state == 3) {
                $action = 'Suppression d\'une adresse e-mail';
            } else if ($state == 2) {
                $action = 'Réactivation d\'une adresse e-mail';
            } else {
                $action = 'Activation d\'une adresse e-mail';
            }

            Historique::create([
                'action' => $action,
                'type' => '8',
                'destination_id' => $id,
                'statut_id' => '3',
                'user_id' => Auth::user()->id,
            ]);

            return redirect()->route('newsletters.index');
        } catch (\Exception $e) {
            return back()->with('');
        }
    }

    public function delete($id)
    {
        try {
            Newsletter::where('id', $id)->update([
                'statut_id' => 2,
                'deleted_at' => now(),
                'id_deleted_at' => Auth::user()->id,
                'id_updated_at' => Auth::user()->id,
            ]);

            Historique::create([
                'action' => 'Suppression d\'un message e-mail',
                'type' => '8',
                'destination_id' => $id,
                'statut_id' => '3',
                'user_id' => Auth::user()->id,
            ]);

            return redirect()->route('newsletters.index');
        } catch (\Exception $e) {
            return back()->with('');
        }
    }
}