<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class UserController extends Controller
{
    public function __construct(Request $request)
    {
        $this->middleware('auth');
        $this->user = Auth::user();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if( ! $this->user->is_admin )
            return redirect('home');

        $users = User::all();

        return view('user.index', [
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if( ! $this->user->is_admin )
            return redirect('home');

        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if( ! $this->user->is_admin )
            return redirect('home');

        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->birth_date = $request->birth_date;

        if( $request->is_admin == 'true' )
            $user->is_admin = true;
        else
            $user->is_admin = false;

        if( ! empty($request->password) )
            $user->password = bcrypt($request->password);

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $file_name = strtolower(str_replace(' ', '-', $request->name) . '.' . $file->getClientOriginalExtension());
            $destination_path = public_path() . '/photo';

            $file->move($destination_path, $file_name);

            $user->photo = '/photo/' . $file_name;
        }

        $user->save();

        return redirect('user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if( $this->user->id != $id AND !$this->user->is_admin )
            return redirect('home');

        $user = User::find($id);

        return view('user.show', [
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if( $this->user->id != $id AND !$this->user->is_admin )
            return redirect('home');
        
        $user = User::find($id);

        return view('user.edit', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->birth_date = $request->birth_date;

        if( $this->user->is_admin AND $request->is_admin == 'true' )
            $user->is_admin = true;
        else
            $user->is_admin = false;

        if( ! empty($request->password) )
            $user->password = bcrypt($request->password);

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $file_name = strtolower(str_replace(' ', '-', $request->name) . '.' . $file->getClientOriginalExtension());
            $destination_path = public_path() . '/photo';

            $file->move($destination_path, $file_name);

            $user->photo = '/photo/' . $file_name;
        }

        $user->save();

        return view('user.show', [
            'user' => $user
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();

        return redirect('user');
    }
}
