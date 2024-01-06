<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaketWisata extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama',
        'harga',
        'tujuanwisata',
        'durasi',
        'deskripsi',
        'destinasi_id',
    ];

    public function detail_paket()
    {
        return $this->hasMany(DetailPaket::class, 'paketwisata_id', 'id');
    }

    public function destinasi()
    {
        return $this->belongsTo(DestinasiWisata::class, 'destinasi_id', 'id');
    }
}
