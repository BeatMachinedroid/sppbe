<?php

namespace App\Controllers;
use App\Models\KasMasuk;
use App\Models\KasKeluar;
use App\Models\Penjualan;
use Carbon\Carbon;

class Home extends BaseController
{
    public function index()
    {
        $session = session();
        $username = $session->get('username');
            $laporan = new KasMasuk();
            $laporankel = new KasKeluar();
            $penjualan = new Penjualan();
            // $laporan1 = new KasKeluar();
            $data['laporan'] = $laporan->penjualan()->groupBy('kas_masuk.created_at', 'desc')->findAll();
            $currentDate = Carbon::now()->toDateString();
            $data['laporan1'] = $laporan->penjualan()
                ->where("DATE(kas_masuk.created_at)", $currentDate)
                ->groupBy('kas_masuk.created_at')
                ->findAll();
            $data['laporan2'] = $laporankel->where("DATE(created_at)", $currentDate)
                ->groupBy('kas_keluar.created_at')
                ->findAll();
            $data['penjualan'] = $penjualan->where("DATE(created_at)", $currentDate)->groupBy('created_at')->findAll();
        if ($session->get('isLoggedIn') === true) {
            return view('layout/Dashboard/dashboard' , $data);
        } else {
            return view('layout/Auth/login');
        }
        
    }
}
