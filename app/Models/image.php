<?php

namespace App\Models;

use App\Models\User;
use App\Models\content;
use App\Models\product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class image extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
