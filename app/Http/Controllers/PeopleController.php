<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            $people = User::where('name', 'LIKE', "%$query%")
                ->orWhere('email', 'LIKE', "%$query%")
                ->paginate(10);
        } else {
            $people = User::paginate(10);
        }
        return view('admin.people.index', ['title' => 'People', 'people' => $people, 'query' => $query]);
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
    public function show(User $people)
    {
        return view('admin.people.show', ['title' => $people->name, 'people' => $people]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $peoples)
{
    return view('admin.people.edit', [
        'title' => 'Edit People',
        'people' => $peoples
    ]);
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $peoples)
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
    public function destroy(User $peoples)
    {
        user::destroy($peoples->id);
        return redirect()->route('people.index')->with('success', 'People deleted successfully.');
    }
}
