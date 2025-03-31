<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use App\Models\Bike;
use App\Models\Car;
use App\Models\User;

class DashboardController extends Controller
{

    public function indexs(Request $request)
    {
        $query = $request->input('query'); // Ambil input pencarian
    
        // Jika ada pencarian, lakukan filter
        if ($query) {
            $bikes = Bike::where('brand', 'LIKE', "%$query%")
                ->orWhere('color', 'LIKE', "%$query%")
                ->orWhere('price', 'LIKE', "%$query%")
                ->get()
                ->map(function ($bike) {
                    return [
                        'id' => $bike->id,
                        'image' => $bike->image,
                        'brand' => $bike->brand,
                        'color' => $bike->color,
                        'price' => $bike->price,
                    ];
                });
    
            $cars = Car::where('brand', 'LIKE', "%$query%")
                ->orWhere('color', 'LIKE', "%$query%")
                ->orWhere('price', 'LIKE', "%$query%")
                ->get()
                ->map(function ($car) {
                    return [
                        'id' => $car->id,
                        'image' => $car->image,
                        'brand' => $car->brand,
                        'color' => $car->color,
                        'price' => $car->price,
                    ];
                });
        } else {
            // Jika tidak ada pencarian, ambil semua data
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
        }
    
        // Gabungkan kendaraan dan shuffle jika bukan pencarian
        $vehicles = (new Collection())->merge($bikes)->merge($cars);

    if (!$query) {
        $vehicles = $vehicles->shuffle();
    }
    
        // Paginasi hasil
        $perPage = 10;
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentItems = $vehicles->slice(($currentPage - 1) * $perPage, $perPage)->values();
    
        $vehicles = new LengthAwarePaginator(
            $currentItems,
            $vehicles->count(),
            $perPage,
            $currentPage,
            ['path' => $request->url()]
        );
    
        // Paginasi Users
        $users = User::when($query, function ($queryBuilder) use ($query) {
            return $queryBuilder->where('name', 'LIKE', "%$query%")
                ->orWhere('email', 'LIKE', "%$query%");
        })->paginate(10);
    
        return view('admin.index', compact('vehicles', 'users', 'query'), ['title' => 'Dashboard']);
    }
    
}
