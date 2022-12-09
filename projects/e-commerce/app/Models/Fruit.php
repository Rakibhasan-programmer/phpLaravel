<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fruit extends Model
{
    use HasFactory;

    private static $fruit, $uploadedImage, $imageName, $imageDirectory, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$uploadedImage = $request->file('image');
        self::$imageName = self::$uploadedImage->getClientOriginalName();
        self::$imageDirectory = 'admin/assets/images/uploaded-files/';
        self::$uploadedImage->move(self::$imageDirectory, self::$imageName);
        self::$imageUrl = self::$imageDirectory.self::$imageName;

        return self::$imageUrl;
    }

    public static function createFruit($request)
    {
        self::$fruit = new Fruit();
        self::$fruit->category_id = $request->category_id;
        self::$fruit->name = $request->name;
        self::$fruit->price = $request->price;
        self::$fruit->description = $request->description;
        self::$fruit->image = self::getImageUrl($request);
        self::$fruit->status = $request->status;
        self::$fruit->save();
    }

    // relationship
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
