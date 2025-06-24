<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'website_name',
        'website_type',
        'desired_features',
        'design_reference',
        'budget',
        'deadline',
        'status',
        'additional_file',
        'whatsapp_link'
    ];

    protected $casts = [
        'deadline' => 'date',
        'budget' => 'decimal:2'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
