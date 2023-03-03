<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Type;

class Project extends Model
{
    protected $guarded = [];
    use HasFactory;
    public static function generateSlug($val)
    {
        return Str::slug($val, '-');
    }
    public function Type()
    {
        return $this->belongsTo(Type::class);
    }
}
