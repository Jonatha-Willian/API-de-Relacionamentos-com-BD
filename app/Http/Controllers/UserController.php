<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $r){
        $users = User::all();
        return $users;
    }
    public function findOne(Request $r){
        $user = User::find($r->id);
        $user['addresses'] =  $user->addresses;
        return $user;

    }
    public function addUser(Request $r){
        $data = $r->only(['name', 'email', 'password']);
        $user= User::create($data);
        return $user;
    }
}
