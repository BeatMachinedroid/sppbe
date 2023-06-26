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
        // $data['laporan'] = $laporan->penjualan()->groupBy('kas_masuk.created_at', 'desc')->findAll();
        $currentDate = Carbon::now()->format('Y');
        $data['laporanmasuk'] = $laporan
            ->where('Year(created_at)', $currentDate)
            ->findAll();
        $data['laporankeluar'] = $laporankel
            ->where('Year(created_at)', $currentDate)
            ->findAll();
        $data['penjualan'] = $penjualan
            ->where('Year(created_at)', $currentDate)
            ->findAll();

            $chartlaporanmasuk = [];
            $chartlaporankeluar = [];
            $chartlaporanpenjualan = [];
            

            $data['chartmasuk'] = $laporan
            ->select('DATE_FORMAT(created_at, "%M") AS bulan, SUM(total_masuk) AS total')
            ->where('Year(created_at)', $currentDate)
            ->groupBy('bulan')
            ->orderBy('bulan', 'ASC')
            ->findAll();

            $data['chartkeluar'] = $laporankel
            ->select('DATE_FORMAT(created_at, "%M") AS bulan, SUM(total) AS total')
            ->where('Year(created_at)', $currentDate)
            ->groupBy('bulan')
            ->orderBy('bulan', 'ASC')
            ->findAll();

            $data['chartpenjualan'] = $penjualan
            ->select('DATE_FORMAT(created_at, "%M") AS bulan, SUM(total) AS total')
            ->where('Year(created_at)', $currentDate)
            ->groupBy('bulan')
            ->orderBy('bulan', 'ASC')
            ->findAll();

            foreach ($data['chartmasuk'] as $item) {
                $chartlaporanmasuk[] = $item['total'];
            }

            foreach ($data['chartkeluar'] as $item) {
                $chartlaporankeluar[] = $item['total'];
            }

            foreach ($data['chartpenjualan'] as $item) {
                $chartlaporanpenjualan[] = $item['total'];
            }

        if ($session->get('isLoggedIn') === true) {
            // chart data
            $data['chartlaporanmasuk']  = json_encode($chartlaporanmasuk);
            $data['chartlaporankeluar'] = json_encode($chartlaporankeluar);
            $data['chartpenjualan'] = json_encode($chartlaporanpenjualan);
            return view('layout/Dashboard/dashboard', $data);
        } else {
            return redirect()->to(base_url('/'));
        }
    }
}
