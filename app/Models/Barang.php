<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Barang as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table="barangs";
    public $timestaps= false;
    protected $primaryKey = 'Kode_Barang';

    protected $fillable = [
        'Kode_Barang',
        'Nama_Barang',
        'Kategori_Barang',
        'Harga',
        'Qty',
    ];
};
