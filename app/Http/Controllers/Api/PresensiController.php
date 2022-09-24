<?php

namespace App\Http\Controllers\Api;

use App\Models\Presensi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PresensiResource;
use Illuminate\Support\Facades\Validator;

class PresensiController extends Controller
{
    public function index()
    {
        //get posts
        $presensis = Presensi::latest()->paginate(5);

        //return collection of posts as a resource
        return new PresensiResource(true, 'List Data Posts', $presensis);
    }

    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create post
        $presensi = Presensi::create([
            'user_id' => $request->user_id, 
            'keperluan' => $request->keperluan, 
            'tempat_tujuan' => $request->tempat_tujuan, 
            'rencana_kembali' => $request->rencana_kembali, 
            'waktu_keluar' => $request->waktu_keluar, 
            'lokasi_keluar' => $request->lokasi_keluar, 
            'waktu_kembali' => $request->waktu_kembali, 
            'lokasi_kembali' => $request->lokasi_kembali
        ]);

        //return response
        return new PresensiResource(true, 'Data Post Berhasil Ditambahkan!', $presensi);
    }
}
