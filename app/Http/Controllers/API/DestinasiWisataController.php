<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\DestinasiWisata;
use Illuminate\Http\Request;

class DestinasiWisataController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit');
        $nama = $request->input('nama');
        $show_product = $request->input('show_product');

        if ($id)
        {
            $destination = DestinasiWisata::with(['paket'])->find($id);

            if ($destination) {
                return ResponseFormatter::success(
                    $destination,
                    'Data destinasi berhasil diambil'
                );
            }
            else {
                return ResponseFormatter::error(
                    null,
                    'Data destinasi tidak ada',
                    404
                );
            }
        }
        $destination = DestinasiWisata::query();

        if ($nama) {
            $destination->where('nama','like','%'.$nama. '%');
        }
        if ($show_product){
            $destination->with('paket');
        }

        return ResponseFormatter::success(
            $destination->paginate($limit),
            'Data destinasi berhasil diambil'
        );
    }
}
