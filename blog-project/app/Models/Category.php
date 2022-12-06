<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    private static $category;

    public static function createCategory($request)
    {
        self::$category = new Category();
        self::$category->name = $request->name;
        self::$category->status = $request->status;
        self::$category->save();
    }

    // update category
    public static function updateCategory($request, $id)
    {
        self::$category = Category::find($id);
        self::$category->name = $request->name;
        self::$category->status = $request->status;
        self::$category->save();
    }
    // delete category
    public static function removeCategory($id)
    {
        self::$category = Category::find($id);
        self::$category->delete();
    }
}
