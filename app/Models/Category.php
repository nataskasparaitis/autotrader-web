<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'description'];

    public function cars()
    {
        return $this->hasMany(Car::class);
    }

    public static function getAllCategories()
    {
        return self::all();
    }

    public static function getCategoryById($id)
    {
        return self::find($id);
    }

    public static function addCategory($data)
    {
        return self::create($data);
    }

    public static function updateCategory($id, $data)
    {
        return self::find($id)->update($data);
    }

    public static function deleteCategory($id)
    {
        return self::find($id)->delete();
    }
}
