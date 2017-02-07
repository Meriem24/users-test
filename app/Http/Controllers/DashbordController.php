<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class DashbordController extends Controller
{

    public function index(){
        $nb_users = User::count();
        return view ('dashboard',compact('nb_users'));
    }
    public function users(){

        $nb_users = DB::table('users')
            ->select(DB::raw('count(*) as users_number'))
            ->get();

        dd($nb_users);
    }
}