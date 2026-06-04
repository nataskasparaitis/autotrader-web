<?php

namespace App\Http\Controllers;
use App\Models\Favorite;
use App\Models\Car;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{
    public function home()
    {
        $cars = Car::with('category')->get();   // or paginate(12) if you re-enabled pagination
        $userFavorites = Favorite::where('user_id', Auth::id())->pluck('car_id')->toArray();
        return view('home', ['cars' => $cars, 'userFavorites' => $userFavorites]);
    }
    public function adminRedirect()
    {
        return redirect('/home');
    }

    public function adminIndex()
    {
        $cars = Car::getAllCars();
        return view('admin', ['cars' => $cars]);
    }

    public function adminCreate()
    {
        $categories = Category::getAllCategories();
        return view('admin.create', ['categories' => $categories]);
    }
    
    public function adminStore(Request $request)
    {
    $request->validate([
        'title' => 'required|string|max:255|unique:cars',
        'price' => 'required|numeric|min:0',
        'image_url' => 'required|string',
        'year' => 'required|integer|min:1886|max:' . date('Y'),
        'make' => 'required|string|max:50',
        'model' => 'required|string|max:50',
        'category_id' => 'nullable|exists:categories,id',
    ]);

    Car::addCar($request->only(['title', 'price', 'image_url', 'year', 'make', 'model', 'category_id']));
    }

    public function adminEdit($id)
    {
        $car = Car::getCarById($id);
        $categories = Category::getAllCategories();
        return view('admin.edit', ['car' => $car, 'categories' => $categories]);
    }

    public function adminUpdate(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'image_url' => 'required|string',
            'year' => 'required|integer|min:1886|max:' . date('Y'),
            'make' => 'required|string|max:50',
            'model' => 'required|string|max:50',
        ]);

        Car::updateCar($id, $request->only(['title', 'price', 'image_url', 'year', 'make', 'model']));
        return redirect('/admin');
    }

    public function adminDestroy($id)
    {
        Car::deleteCar($id);
        return redirect('/admin');
    }
}
