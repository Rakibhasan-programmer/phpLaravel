<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    private static  $product, $image, $imageName, $directory, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'product-image/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function newProduct($request)
    {
        self::$product = new Product();
        self::$product->category_id        = $request->category_id;
        self::$product->title              = $request->title;
        self::$product->description        = $request->description;
        self::$product->image              = self::getImageUrl($request);
        self::$product->save();
    }
//    public function category()
//    {
//        return $this->belongsTo(Category::class);
//    }
    // update
    public static function updateProduct($request, $id)
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
        self::$product->category_id        = $request->category_id;
        self::$product->title              = $request->title;
        self::$product->description        = $request->description;
        self::$product->image              = self::$imageUrl;
        self::$product->save();
    }

    // delete
    public static function deleteProduct($id)
    {
        self::$product = Product::find($id);
        if (file_exists(self::$product->image)){
            unlink(self::$product->image);
        }
        self::$product->delete();
    }
}
