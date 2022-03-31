<?php

namespace App\Models;

use App\Models\content;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class imageCn extends Model
{
    use HasFactory;

    public function content()
    {
        return $this->belongsTo(content::class);
    }

}
