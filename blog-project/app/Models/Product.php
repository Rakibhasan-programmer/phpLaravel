<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    private static $product, $uploadedImage, $imageName, $imageDirectory, $imageUrl;

    public static function createProduct($request)
    {
        self::$uploadedImage = $request->file('image');
        self::$imageName = self::$uploadedImage->getClientOriginalName();
        self::$imageDirectory = 'admin/assets/images/uploaded-files/';
        self::$uploadedImage->move(self::$imageDirectory, self::$imageName);
        self::$imageUrl = self::$imageDirectory.self::$imageName;

        self::$product = new Product();
        self::$product->category_id = $request->category_id;
        self::$product->brand_id = $request->brand_id;
        self::$product->name = $request->name;
        self::$product->price = $request->price;
        self::$product->description = $request->description;
        self::$product->image = self::$imageUrl;
        self::$product->status = $request->status;
        self::$product->save();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
