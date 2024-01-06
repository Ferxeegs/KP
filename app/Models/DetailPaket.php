<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailPaket extends Model
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
        'detailharga',
        'paketwisata_id',
    ];

    public function detail_paket()
    {
        return $this->hasOne(PaketWisata::class, 'paketwisata_id', 'id');
    }
}
