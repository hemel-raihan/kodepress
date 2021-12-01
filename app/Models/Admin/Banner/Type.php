<?php

namespace App\Models\Admin\Banner;

use App\Models\Admin\Banner\Banner;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Type extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function banners(){
        return $this->hasMany(Banner::class);
    }
}
