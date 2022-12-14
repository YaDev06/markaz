<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guruh extends Model
{
    use HasFactory;
  
    public static function search($search)
    {
        return empty($search) ? static::query()
         : static::query()
         ->orWhere('g_name','like', '%'.$search.'%')->orWhere('name','like', '%'.$search.'%');
    }
  
    
}