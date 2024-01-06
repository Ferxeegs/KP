<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\PaketWisata;
use Illuminate\Http\Request;

class PaketWisataController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit');
        $nama = $request->input('nama');
        $harga = $request->input('harga');
        $tujuanwisata = $request->input('tujuanwisata');
        $durasi = $request->input('durasi');
        $deskripsi = $request->input('deskripsi');
        $destinasi = $request->input('destinasi');


        if ($id)
        {
            $product = PaketWisata::with(['destinasi', 'detail_paket'])->find($id);

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
        $product = PaketWisata::with(['destinasi', 'detail_paket']);

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
        if ($destinasi) {
            $product->where('destinasi', $destinasi);
        }
        if ($deskripsi) {
            $product->where('deskripsi','like','%'.$deskripsi. '%');
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