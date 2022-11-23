<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    private static  $category, $image, $imageName, $directory, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'category-image/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function newCategory($request)
    {
        self::$category = new Category();
        self::$category->name        = $request->name;
        self::$category->description = $request->description;
        self::$category->image       = self::getImageUrl($request);
        self::$category->save();
    }

    // update
    public static function updateCategory($request, $id)
    {
        self::$category = Category::find($id);
        if ($request->file('image')){
            if (file_exists(self::$category->image)){
                unlink(self::$category->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }else{
            self::$imageUrl = self::$category->image;
        }
        self::$category->name        = $request->name;
        self::$category->description = $request->description;
        self::$category->image       = self::$imageUrl;
        self::$category->save();
    }

    // delete
    public static function deleteCategory($id)
    {
        self::$category = Category::find($id);
        if (file_exists(self::$category->image)){
            unlink(self::$category->image);
        }
        self::$category->delete();
    }


}
