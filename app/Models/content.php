<?php

namespace App\Models;

use App\Models\User;
use App\Models\imageCn;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class content extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function imageCn()
    {
        return $this->hasOne(imageCn::class);
    }
}
