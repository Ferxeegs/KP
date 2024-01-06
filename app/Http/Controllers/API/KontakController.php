<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit');
        $nama = $request->input('nama');
        $telepon = $request->input('telepon');
        $pesan = $request->input('pesan');
       


        if ($id)
        {
            $product = Kontak::find($id);

            if ($product) {
                return ResponseFormatter::success(
                    $product,
                    'Data kontak berhasil diambil'
                );
            }
            else {
                return ResponseFormatter::error(
                    null,
                    'Data kontak tidak ada',
                    404
                );
            }
        }
        $product = Kontak::query();

        if ($nama) {
            $product->where('nama','like','%'.$nama. '%');
        }
        if ($pesan) {
            $product->where('pesan','like','%'.$pesan. '%');
        }
        if ($telepon) {
            $product->where('price','like','>='.$telepon. '%');
        }
        
        return ResponseFormatter::success(
            $product->paginate($limit),
            'Data pesan berhasil diambil'
        );
        if ($pesan) {
            $product->where('pesan','like','%'.$pesan. '%');
        }

    }
}
