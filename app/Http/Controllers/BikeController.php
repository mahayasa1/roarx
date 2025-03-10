<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BikeController extends Controller
{
    // Display a listing of the bikes
    public function index()
    {
        $bikes = Bike::all();
        return view('admin.bikes.index', ['title' => 'Bikes', 'bikes' => $bikes]);
    }

    // Show the form for creating a new bike
    public function create()
    {
        return view('admin.bikes.create', ['title' => 'Create Bike']);
    }

    // Store a newly created bike in the database
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg,png,gif,svg|max:2048',
            'brand' => 'required|string',
            'color' => 'required|string',
            'price' => 'required|numeric',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('bikes', 'public');
        }

        Bike::create([
            'image' => $imagePath,
            'brand' => $request->brand,
            'color' => $request->color,
            'price' => $request->price,
        ]);
        return redirect()->route('bikes.index')->with('success', 'Bike created successfully.');
    }

    // Display the specified bike
    public function show(Bike $bike)
    {
        return view('admin.bikes.show', ['title' => $bike->brand, 'bike' => $bike]);
    }

    // Show the form for editing the specified bike
    public function edit(Bike $bike)
    {
        return view('admin.bikes.edit', ['title' => $bike->brand, 'bike' => $bike]);
    }

    // Update the specified bike in the database
    public function update(Request $request, Bike $bike)
    {
        $request->validate([
            'image' => 'nullable|iamge|mimes:png,jpg,jpeg,png,gif,svg|max:2048',
            'brand' => 'required|string',
            'color' => 'required|string',
            'price' => 'required|numeric',
        ],[
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'The file must be a file of type: png, jpg, jpeg, png, gif, svg.',
            'image.max' => 'The file may not be greater than 2048 kilobytes.',
        ]);

        if ($request->hasFile('image')) {
            if($bike->image && Storage::disk('public')->exists($bike->image)) {
                Storage::disk('public')->delete($bike->image);
            }
            $imagePath = $request->file('image')->store('bikes', 'public');
        }else {
            $imagePath = $bike->image;
        }

        $bike->update([
            'image' => $imagePath,
            'brand' => $request->brand,
            'color' => $request->color,
            'price' => $request->price,
        ]);
        return redirect()->route('bikes.index')->with('success', 'Bike updated successfully.');
    }

    // Remove the specified bike from the database
    public function destroy(Bike $bike)
    {
        if ($bike->image && Storage::disk('public')->exists($bike->image)) {
            Storage::disk('public')->delete($bike->image);
        }

        $bike->delete();
        return redirect()->route('bikes.index')->with('success', 'Bike deleted successfully.');
    }
}