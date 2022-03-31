<?php

namespace App\Models;

use App\Models\User;
use App\Models\imagePr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'prix',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function imagePr()
    {
        return $this->hasOne(imagePr::class);
    }

}
