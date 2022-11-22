<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpOption\None;
use SebastianBergmann\Type\NullType;

class RealPupils extends Model
{
    use HasFactory;
   
    public static function search($search)
    {
        return empty($search) ? static::query()
         : static::query()
         ->orWhere('ism','like', '%'.$search.'%')->get();
    }
}   