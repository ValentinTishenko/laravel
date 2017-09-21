<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'User list',
            'pageTitle' => 'List of all user',
            'users' => User::all()
        ];
        return view('pages.users.index', $data);
    }

    public function postAdd(Request $request)
    {
        User::insert($request->except('_token'));
        return redirect('/');
    }

    public function getAdd()
    {
        $data = [
            'title' => 'Add',
            'pageTitle' => 'Add new user'
        ];
        return view('pages.users.activity', $data);
    }

    public function getEdit($id)
    {
        $data = [
            'title' => 'Edit',
            'pageTitle' => 'Edit user',
            'user' => User::where('id', $id)->first()
        ];
        return view('pages.users.activity', $data);
    }

    public function postEdit(Request $request, $id)
    {
        $data = $request->except('_token');
        User::where('id', $id)
            ->update($data);
        return redirect('/');
    }
}
