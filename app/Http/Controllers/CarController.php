<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        return view('admin.cars.index', ['title' => 'Cars', 'cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.cars.create', ['title' => 'Create Car']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg,png,gif,svg|max:2048',
            'brand' => 'required|string',
            'color' => 'required|string',
            'price' => 'required|numeric',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('cars', 'public');
        }

        Car::create([
            'image' => $imagePath,
            'brand' => $request->brand,
            'color' => $request->color,
            'price' => $request->price,
        ]);
        return redirect()->route('cars.index')->with('success', 'Car created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return view('admin.cars.show', ['title' => 'Car']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        return view('admin.cars.edit', ['title' => 'Edit Car']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'brand' => 'required|string',
            'model' => 'required|string',
            'color' => 'required|string',
            'price' => 'required|numeric',
        ]);

        // Jika ada file gambar baru diupload
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($car->image && Storage::disk('public')->exists($car->image)) {
                Storage::disk('public')->delete($car->image);
            }
            // Upload gambar baru
            $imagePath = $request->file('image')->store('cars', 'public');
        } else {
            // Gunakan gambar lama jika tidak ada gambar baru
            $imagePath = $car->image;
        }

        // Update data di database
        $car->update([
            'image' => $imagePath,
            'brand' => $request->brand,
            'model' => $request->model,
            'color' => $request->color,
            'price' => $request->price,
        ]);

        return redirect()->route('cars.index')->with('success', 'Car updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        if ($car->image && Storage::disk('public')->exists($car->image)) {
            Storage::disk('public')->delete($car->image);
        }
        $car->delete();
        return redirect()->route('cars.index')->with('success', 'Car deleted successfully.');
    }
}
