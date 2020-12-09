<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table = "offers";
    protected $fillable = ['name_ar', 'name_en', 'price', 'details_ar', 'details_en', 'create_at', 'update_at'];
    protected $hidden = ['create_at', 'update_at'];
    public $timestamps = false;
}
