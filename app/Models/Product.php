<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'batch_id',
        'name',
        'description',
        'image',
        'certificate'
    ];

    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }
}
