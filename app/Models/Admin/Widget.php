<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Widget extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
