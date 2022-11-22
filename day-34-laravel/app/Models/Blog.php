<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    private static  $blog, $image, $imageName, $directory, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'blog-image/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function newBlog($request)
    {
        self::$blog = new Blog();
        self::$blog->category_id        = $request->category_id;
        self::$blog->title              = $request->title;
        self::$blog->short_description  = $request->short_description;
        self::$blog->long_description   = $request->long_description;
        self::$blog->image              = self::getImageUrl($request);
        self::$blog->save();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
