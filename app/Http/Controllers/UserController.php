<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * @return Application|Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $users = User::all();
        dd($users);
//        return view('index');
    }

    public function create()
    {
        return view('create');
    }


    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('edit', compact('user'));
    }


    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
                                                'name' => 'required|max:255',

                                            ]);
        User::whereId($id)->update($validatedData);

        return redirect('/users')->with('success', 'Users Data is successfully updated');
    }


    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/users')->with('success', 'Users Data is successfully deleted');
    }
}

