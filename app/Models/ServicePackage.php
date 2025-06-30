<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicePackage extends Model
{
    // Uncomment and set the correct table name if it is not 'service_packages'
    // protected $table = 'your_actual_table_name';

    protected $fillable = ['nama_paket', 'harga', 'deskripsi'];

    public function getRouteKeyName()
    {
        return 'id';
    }
}
