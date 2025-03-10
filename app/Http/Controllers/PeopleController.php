<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Storage;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peoples = user::all();
        return view('admin.people.index', ['title' => 'People', 'people' => $peoples]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.people.create', ['title' => 'Create People']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required|string',
            'email'=> 'required|email',
            'password'=> 'required|string',
            'role'=> 'required|string',
        ]);

    user::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'role' => $request->role,
    ]);
    return redirect()->route('people.index')->with('success', 'People created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(user $peoples)
    {
        return view('admin.people.show', ['title' => $peoples->name, 'people' => $peoples]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(user $peoples)
    {
        return view('admin.people.edit', ['title' => $peoples->name, 'people' => $peoples]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, user $peoples)
    {
        $request->validate([
            'name'=> 'required|string',
            'email'=> 'required|email',
            'role'=> 'required|string',
        ]);

        user::where('id', $peoples->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ]);
        return redirect()->route('people.index')->with('success', 'People updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user $peoples)
    {
        user::destroy($peoples->id);
        return redirect()->route('people.index')->with('success', 'People deleted successfully.');
    }
}
