<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use Carbon\Carbon;
use Mpdf\Mpdf;
use App\Models\KasMasuk;
use App\Models\KasKeluar;

class LaporanController extends BaseController
{
    public function index()
    {
        $session = session();
        $laporan = new KasMasuk();
        $laporankel = new KasKeluar();
        // $laporan1 = new KasKeluar();
        // $data['laporan'] = $laporan->penjualan()->findAll();
        $currentDate = Carbon::now()->toDateString();
        $data['laporan1'] = $laporan
        ->where('date(created_at)', $currentDate)
        ->findAll();
        $data['laporan2'] = $laporankel
        ->where('date(created_at)', $currentDate)
        ->findAll();
        $data['tanggal'] = $currentDate;
        
        if ($session->get('isLoggedIn') === true) {
            // dd($data);
            return view('layout/kas/laporan', $data);
        } else {
            return redirect()->to(base_url('/'));
        }
    }

    public function search()
    {
        $laporan = new KasMasuk();
        $laporankel = new KasKeluar();
        // $laporan1 = new KasKeluar();
        // $data['laporan'] = $laporan->penjualan()->groupBy('kas_masuk.created_at', 'desc')->findAll();
        $currentDate = $this->request->getGet('tanggal');
        $data['laporan1'] = $laporan
            ->where("DATE(created_at)", $currentDate)
            // ->groupBy('created_at')
            ->findAll();
        
        $data['laporan2'] = $laporankel->where("DATE(created_at)", $currentDate)
            // ->groupBy('created_at')
            ->findAll();

            if ($data['laporan1'] != null) {
                foreach ($data['laporan1'] as $item) {
                    $data['tanggal'] = $item['created_at'];
                }
            }else {
                $data['tanggal'] = $currentDate;
            }
            // dd($data);
        return view('layout/kas/laporan', $data);
    }

    public function generatePdf()
    {
        $laporan = new KasMasuk();
        $laporankel = new KasKeluar();
        // $laporan1 = new KasKeluar();
        // $data['laporan'] = $laporan->penjualan()->groupBy('kas_masuk.created_at', 'desc')->findAll();
        $currentDate = $this->request->getGet('tanggal');
        $data['laporan1'] = $laporan
            ->where("DATE(created_at)", $currentDate)
            // ->groupBy('created_at')
            ->findAll();
        
        $data['laporan2'] = $laporankel->where("DATE(created_at)", $currentDate)
            // ->groupBy('created_at')
            ->findAll();

            if ($data['laporan1'] != null) {
                foreach ($data['laporan1'] as $item) {
                    $data['tanggal'] = $item['created_at'];
                }
            }else {
                $data['tanggal'] = $currentDate;
            }
            // dd($data);

        $mpdf = new Mpdf();
        $html = view('layout/kas/print', $data);
        $mpdf->WriteHTML($html);
        $mpdf->Output('laporan.pdf', 'D'); // Menampilkan PDF di browser
    }

    public function print(){
        $laporan = new KasMasuk();
        $laporankel = new KasKeluar();
        // $laporan1 = new KasKeluar();
        // $data['laporan'] = $laporan->penjualan()->groupBy('kas_masuk.created_at', 'desc')->findAll();
        $currentDate = $this->request->getGet('tanggal');
        $data['laporan1'] = $laporan
            ->where("DATE(created_at)", $currentDate)
            ->groupBy('created_at')
            ->findAll();
        
        $data['laporan2'] = $laporankel->where("DATE(created_at)", $currentDate)
            ->groupBy('created_at')
            ->findAll();

            if ($data['laporan1'] != null) {
                foreach ($data['laporan1'] as $item) {
                    $data['tanggal'] = $item['created_at'];
                }
            }else {
                $data['tanggal'] = $currentDate;
            }
        return view('layout/kas/laporan', $data);
    }
}
