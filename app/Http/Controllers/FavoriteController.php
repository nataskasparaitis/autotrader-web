<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function add(Request $request)
    {
        $userId = Auth::id();
        $carId = $request->carId;

        $existing = Favorite::where('user_id', $userId)->where('car_id', $carId)->first();

        if($existing) {
            $existing->delete();
            return response()->json(['status' => 'removed']);
        } else {
            Favorite::create(['user_id' => $userId, 'car_id' => $carId]);
            return response()->json(['status' => 'added']);
        }
    }

    public function favorites()
    {
        $favorites = Favorite::where('user_id', Auth::id())
                            ->with('car.category')   // eager load car and its category
                            ->get();
        return view('favorites', ['favorites' => $favorites]);
    }
}
