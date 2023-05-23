<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMahasiswaRequests;
use App\Http\Resources\MahasiswaResource;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MahasiswaResource::collection(Mahasiswa::all()); //tanpa paginate
        // return MahasiswaResource::collection(Mahasiswa::paginate(1)); //dengan paginate
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMahasiswaRequests $request)
    {
        //  return response()->json('hello');
        return new MahasiswaResource(Mahasiswa::create(
            [
            'Nim'=> $request -> Nim,
            'Nama'=> $request -> Nama,
            'Tanggal_Lahir' => $request ->Tanggal_Lahir,
            'Jurusan' => $request -> Jurusan,
            'No_Handphone' => $request -> No_Handphone,
            'Email' => $request -> Email,
            'kelas_id' => $request -> Kelas,
            ]
        ));
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return new MahasiswaResource($mahasiswa);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}
