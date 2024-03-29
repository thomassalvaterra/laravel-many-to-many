<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "description",
        "thumb",
        "type_id"
    ];

    public function type()
    {
        return $this->belongsTo(type::class);
    }

    public function technologies()
    {
        return $this->belongsToMany(technology::class);
    }
}
