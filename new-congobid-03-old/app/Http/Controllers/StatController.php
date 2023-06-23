<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StatController extends Controller
{
    public function index()
    {
        $selectedDate = date('Y-m-d');
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();
        $users = User::where('role_id', '!=', 1)->get();
                    
        return view('admin.stats', compact('users', 'selectedDate', 'chats'));
    }

    public function getUsersByDate(Request $request)
    {
        $selectedDate = $request->input('date', date('Y-m-d'));
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();
        $users = User::whereBetween('user_connected_at', [$selectedDate . ' 00:00:00', $selectedDate . ' 23:59:59'])
            ->get()
            ->groupBy(function ($user) {
                return Carbon::parse($user->user_connected_at)->format('H');
            })
            ->map(function ($users) {
                return count($users);
            })
            ->toArray();
        return view('admin.stats', compact('chats', 'users', 'selectedDate'));
    }

}