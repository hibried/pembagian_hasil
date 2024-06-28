<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pengguna::all();

        $count = $data->count();

        $hasil_bersih = $count * (69000 * 0.2);

        $total_durasi = 0;

        foreach($data as $dt){
            $total_durasi += $dt->durasi_nonton;
        }

        $paket_a = Pengguna::where('paket', '=', 'A')->get();
        $paket_b = Pengguna::where('paket', '=', 'B')->get();
        $paket_c = Pengguna::where('paket', '=', 'C')->get();

        $durasi_a = 0;
        $durasi_b = 0;
        $durasi_c = 0;

        foreach($paket_a as $a){
            $durasi_a += $a->durasi_nonton;
        }

        foreach($paket_b as $b){
            $durasi_b += $b->durasi_nonton;
        }

        foreach($paket_c as $c){
            $durasi_c += $c->durasi_nonton;
        }

        $persen_a = (float) $durasi_a / $total_durasi;
        $persen_b = (float) $durasi_b / $total_durasi;
        $persen_c = (float) $durasi_c / $total_durasi;

        return view('index')->with([
            'data' => $data,
            'count' => $count,
            'hasil_bersih' => $hasil_bersih,
            'total_durasi' => $total_durasi,
            'durasi_a' => $durasi_a,
            'durasi_b' => $durasi_b,
            'durasi_c' => $durasi_c,
            'persen_a' => $persen_a,
            'persen_b' => $persen_b,
            'persen_c' => $persen_c,
            'penghasilan_a' => $hasil_bersih * $persen_a,
            'penghasilan_b' => $hasil_bersih * $persen_b,
            'penghasilan_c' => $hasil_bersih * $persen_c
        ]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
