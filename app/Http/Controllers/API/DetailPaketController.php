<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\DetailPaket;
use Illuminate\Http\Request;

class DetailPaketController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit');
        $nama = $request->input('nama');
        $harga = $request->input('harga');
        $tujuanwisata = $request->input('tujuanwisata');
        $durasi = $request->input('durasi');
        $detailharga = $request->input('detailharga');
        $paketwisata = $request->input('paketwisata');


        if ($id)
        {
            $product = DetailPaket::with(['detail_paket'])->find($id);

            if ($product) {
                return ResponseFormatter::success(
                    $product,
                    'Data paket berhasil diambil'
                );
            }
            else {
                return ResponseFormatter::error(
                    null,
                    'Data paket tidak ada',
                    404
                );
            }
        }
        $product = DetailPaket::with(['detail_paket']);

        if ($nama) {
            $product->where('nama','like','%'.$nama. '%');
        }
        if ($tujuanwisata) {
            $product->where('tujuanwisata','like','%'.$tujuanwisata. '%');
        }
        if ($harga) {
            $product->where('price','like','>='.$harga. '%');
        }
        if ($durasi) {
            $product->where('durasi','like','%'.$durasi. '%');
        }
        if ($paketwisata) {
            $product->where('paketwisata', $paketwisata);
        }
        if ($detailharga) {
            $product->where('detailharga','like','%'.$detailharga. '%');
        }
        

        return ResponseFormatter::success(
            $product->paginate($limit),
            'Data paket berhasil diambil'
        );
        if ($tujuanwisata) {
            $product->where('tujuanwisata','like','%'.$tujuanwisata. '%');
        }

    }
}
