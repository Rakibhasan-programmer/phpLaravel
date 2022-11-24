<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    private static $brand, $image, $imageName, $directory, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'brand-image/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function newBrand($request)
    {
        self::$brand = new Brand();
        self::$brand->name        = $request->name;
        self::$brand->description = $request->description;
        self::$brand->image       = self::getImageUrl($request);
        self::$brand->save();
    }
    // update
    public static function updateBrand($request, $id)
    {
        self::$brand = Brand::find($id);
        if($request->file('image'))
        {
            if (file_exists(self::$brand->image)){
                unlink(self::$brand->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }else{
            self::$imageUrl = self::$brand->image;
        }
        self::$brand->name        = $request->name;
        self::$brand->description = $request->description;
        self::$brand->image       = self::$imageUrl;
        self::$brand->save();
    }
    // delete
    public static function deleted($id)
    {
        self::$brand = Brand::find($id);
        if(file_exists(self::$brand->image))
        {
            unlink(self::$brand->image);
        }
        self::$brand->delete();
    }
}
