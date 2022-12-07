<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    private static $product, $uploadedImage, $imageName, $imageDirectory, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$uploadedImage = $request->file('image');
        self::$imageName = self::$uploadedImage->getClientOriginalName();
        self::$imageDirectory = 'admin/assets/images/uploaded-files/';
        self::$uploadedImage->move(self::$imageDirectory, self::$imageName);
        self::$imageUrl = self::$imageDirectory.self::$imageName;

        return self::$imageUrl;
    }
    public static function createProduct($request)
    {

        self::$product = new Product();
        self::$product->category_id = $request->category_id;
        self::$product->brand_id = $request->brand_id;
        self::$product->name = $request->name;
        self::$product->price = $request->price;
        self::$product->description = $request->description;
        self::$product->image = self::getImageUrl($request);
        self::$product->status = $request->status;
        self::$product->save();
    }

    // update
    public static function productUpdate($request, $id)
    {
        self::$product = Product::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$product->image)){
                unlink(self::$product->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }else{
            self::$imageUrl = self::$product->image;
        }
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
