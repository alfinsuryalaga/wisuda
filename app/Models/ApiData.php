<?php

namespace App\Models;

use Illuminate\Support\Facades\Http;
use Illuminate\Database\Eloquent\Model;

class ApiData extends Model
{

    public function Mahasiswa($npm)
    {
        $npm = trim('10080024001');
        $apiUrl = "https://sibima.unisba.ac.id/api/getBiodataMahasiswa/{$npm}/1";
        $mhs = Http::withHeaders([
            'x-api-key' => 'Unisba2022@psitek',
        ])->get($apiUrl)->json();
        return $mhs['data'];
    }
    public function prodi($where)
    {
        $apiUrl = "https://simaster.unisba.ac.id/api/get-fakultas-unit/{$where}";
        $mhs = Http::withHeaders([
            'x-api-key' => 'Unisba2023@psitek',
        ])->get($apiUrl)->json();
        return $mhs['data'];
    }
    public function karyawan($nik)
    {
        $nik = trim('10080024001');
        $apiUrl = "https://sibima.unisba.ac.id/api/getBiodataMahasiswa/{$nik}/1";
        $mhs = Http::withHeaders([
            'x-api-key' => 'Unisba2022@psitek',
        ])->get($apiUrl)->json();
        return $mhs['data'];
    }

}
