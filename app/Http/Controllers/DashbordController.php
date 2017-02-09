<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class DashbordController extends Controller
{

    public function index(){

        return view ('dashboard');
    }
    public function users(){

        $nb_users = User::count();
        return response()
            ->json(['data' => $nb_users]);
        //return ($nb_users);
    }
}