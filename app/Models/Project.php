<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ["title", "type_id", "content", "start_date", "end_date"];

    public function type() {
        return $this->belongsTo(Type::class);
    }
}
