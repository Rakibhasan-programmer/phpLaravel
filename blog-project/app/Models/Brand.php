<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    public static $brand;

    public static function createBrand($request)
    {
        self::$brand = new Brand();
        self::$brand->name = $request->name;
        self::$brand->status = $request->status;
        self::$brand->save();
    }
    // update brand
    public static function brandUpdate($request, $id)
    {
        self::$brand = Brand::find($id);
        self::$brand->name = $request->name;
        self::$brand->status = $request->status;
        self::$brand->save();
    }

}
