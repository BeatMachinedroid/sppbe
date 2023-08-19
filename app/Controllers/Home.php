<?php

namespace App\Controllers;
use App\Models\KasMasuk;
use App\Models\KasKeluar;
use App\Models\Penjualan;
use App\Models\Laporan;
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
        $laporann = new Laporan();
        // $laporan1 = new KasKeluar();
        $data['penjualan'] = $penjualan->groupBy('tanggal', 'desc')->findAll();
        // $currentDate = Carbon::now()->format('Y');
        $data['Masuk'] = $laporan->findAll();
        $data['Keluar'] = $laporankel->findAll();

            // $chartlaporanmasuk = [];
            // $chartlaporankeluar = ""
            // $chartlaporanpenjualan = [];
            
            $data['chartmasuk'] = $laporan
            ->select('DATE_FORMAT(tanggal, "%M") AS bulan, SUM(total_masuk) AS totalmasuk')
            ->groupBy('bulan')
            ->findAll();

            $data['chartkeluar'] = $laporankel
            ->select('DATE_FORMAT(tanggal, "%M") AS bulan, SUM(total_keluar) AS totalkeluar')
            ->groupBy('bulan')
            ->findAll();

            $chartmasuk = $data['chartmasuk'];
            $chartkeluar = $data['chartkeluar'];

            $monthlyCashFlow = [];
            foreach ($chartmasuk as $masuk) {
                $bulan = $masuk['bulan'];
                $totalmasuk = $masuk['totalmasuk'];
            
                // Initialize the monthlyCashFlow array with the month and total_masuk value
                $monthlyCashFlow[$bulan] = [
                    'bulan' => $bulan,
                    'total_masuk' => $totalmasuk,
                    'total_keluar' => 0, // Initialize total_keluar as 0
                    'total_kas' => $totalmasuk, // Initialize total_kas with total_masuk value
                ];
            }

            foreach ($chartkeluar as $keluar) {
                $bulan = $keluar['bulan'];
                $totalkeluar = $keluar['totalkeluar'];
            
                // Update the existing entry in the monthlyCashFlow array
                if (isset($monthlyCashFlow[$bulan])) {
                    $monthlyCashFlow[$bulan]['total_keluar'] = $totalkeluar;
                    $monthlyCashFlow[$bulan]['total_kas'] -= $totalkeluar;
                }
            }

            $totalKasData = array_values($monthlyCashFlow);
        if ($session->get('isLoggedIn') === true) {
            // chart data
            $data['totalkas'] = $totalKasData;
            // dd($data);
            return view('layout/Dashboard/dashboard', $data);
        } else {
            return redirect()->to(base_url('/'));
        }
    }
}
