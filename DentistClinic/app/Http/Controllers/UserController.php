<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreUsersRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return View('users.index', [
            'users' => User::paginate(10)
        ]);
    }

    public function account() {
        $user = auth()->user();
        $userId = $user->id;
        return View('users.account', [
            'users' => User::where('id', $userId)
        ]);
    }

    public function editAccount() {
        $user = auth()->user();

        return view('users.editAccount', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user) : View
    {
        return view('users.show',[
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user) : View
    {
        return view("users.edit", [
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUsersRequest $request, User $user) : RedirectResponse
    {
        $user->fill($request->all());
        $user->save();
        if($user->id === 1) {
        return redirect('users/list');
        }
        else {
            return redirect(route('users.account'));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $flight = User::find($id);
        $flight->delete();
        return redirect('users/list');
    }
}
