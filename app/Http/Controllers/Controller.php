<?php

namespace App\Http\Controllers;

use App\Models\Silsilah;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function semuaAnakBudi()
    {
        $semuaAnakBudi = Silsilah::where('ayah_id', 1)->get();

        return response()->json([
            'error' => false,
            'error_message' => '',
            'data' => $semuaAnakBudi,
        ], 200);
    }

    public function cucuBudi()
    {
        $cucu = [];
        $anakBudi = Silsilah::where('ayah_id', 1)->get();

        foreach ($anakBudi as $value) {
            $cucu[] = Silsilah::where('ayah_id', $value->id)->get();
        }

        return response()->json([
            'error' => false,
            'error_message' => '',
            'data' => $cucu,
        ], 200);
    }

    public function cucuPerempuanBudi()
    {
        $cucuPerempuan = [];
        $anakBudi = Silsilah::where('ayah_id', 1)->get();

        foreach ($anakBudi as $value) {
            $cucuPerempuan[] = Silsilah::where('ayah_id', $value->id)->where('jenis_kelamin', 'perempuan')->get();
        }

        return response()->json([
            'error' => false,
            'error_message' => '',
            'data' => $cucuPerempuan,
        ], 200);
    }

    public function bibiFarah()
    {
        $farah = Silsilah::where('nama', 'Farah')->first();
        $ayahFarah = Silsilah::where('id', $farah->ayah_id)->first();
        $kakekFarah = Silsilah::where('id', $ayahFarah->ayah_id)->first();
        $bibiFarah = Silsilah::where('ayah_id', $kakekFarah->id)->where('jenis_kelamin', 'perempuan')->get();

        return response()->json([
            'error' => false,
            'error_message' => '',
            'data' => $bibiFarah,
        ], 200);
    }

    public function sepupuLakiLakiHani()
    {
        $sepupuLakiLakiHani = [];

        $hani = Silsilah::where('nama', 'Hani')->first();
        $ayahHani = Silsilah::where('id', $hani->ayah_id)->first();
        $anakKakekHeni = Silsilah::where('ayah_id', $ayahHani->ayah_id)->get();

        foreach ($anakKakekHeni as $value) {
            $sepupuLakiLakiHani[] = Silsilah::where('ayah_id', $value->id)->where('jenis_kelamin', 'laki-laki')->get();
        }

        return response()->json([
            'error' => false,
            'error_message' => '',
            'data' => $sepupuLakiLakiHani,
        ], 200);
    }
}