<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bike;
use App\Models\Car;
use App\Models\User;

class DashboardController extends Controller
{
    public function indexs()
    {
        $bikes = Bike::all()->map(function ($bike) {
            return [
                'id' => $bike->id,
                'image' => $bike->image,
                'brand' => $bike->brand,
                'color' => $bike->color,
                'price' => $bike->price,
            ];
        });

        $cars = Car::all()->map(function ($car) {
            return [
                'id' => $car->id,
                'image' => $car->image,
                'brand' => $car->brand,
                'color' => $car->color,
                'price' => $car->price,
            ];
        });

        $vehicles = $bikes->merge($cars);

        $users = User::all();


        // dd($vehicles, $users);
        return view('admin.index', compact('vehicles', 'users'), ['title' => 'Dashboard']);
    }
}
