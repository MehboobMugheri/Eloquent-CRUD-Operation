<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public $timestamps = false;

    // protected $table = "users_table";

    // protected $primaryKey = "user_id";

    protected $guarded = [];

    // protected $attributes = ['usercity' => 'Karachi'];

    // protected function Name(): Attribute{
    //     return Attribute::make();
    //     // get: fn(string $value) => ucwords($value);
    //     get: fn(string $value) => strtolower($value);
    // }

    public function getNameAttribute($value){
        return strtolower($value);
    }
}
