<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use Carbon\Carbon;
use Mpdf\Mpdf;
use App\Models\KasMasuk;
use App\Models\KasKeluar;
use App\Models\Laporan;

class LaporanController extends BaseController
{
    public function index()
    {
        $session = session();
        $laporan = new Laporan();
        $laporan1 = new KasKeluar();
        $laporan2 = new KasMasuk();
        // $data['laporan'] = $laporan->penjualan()->findAll();
        $currentDate = Carbon::now()->toDateString();
        $data['laporan'] = $laporan->findAll();
        $data['laporankeluar'] = $laporan->keluar();
        $data['laporanmasuk'] = $laporan->masuk();
        foreach ($data['laporan'] as &$item) {
            $idKasKeluar = $item['kas_keluar_id'];
            $idKasMasuk = $item['kas_masuk_id'];
            // Retrieve "masuk" data based on id_kas_keluar
            $item['masuk'] = $laporan2->where('id_kas_masuk', $idKasMasuk)->findAll();
        
            // Retrieve "keluar" data based on id_kas_keluar
            $item['keluar'] = $laporan1->where('id_kas_keluar', $idKasKeluar)->findAll();
            
        }
        unset($item);
        
        if ($session->get('isLoggedIn') === true) {
            // dd($data);
            return view('layout/kas/laporan', $data);
        } else {
            return redirect()->to(base_url('/'));
        }
    }

    public function search()
    {
        $laporan = new Laporan();
        $laporan2 = new KasMasuk();
        $laporan1 = new KasKeluar();
        // $laporan1 = new KasKeluar();
        // $data['laporan'] = $laporan->penjualan()->groupBy('kas_masuk.created_at', 'desc')->findAll();
        $currentDate = $this->request->getGet('tanggal');
        $data['laporan'] = $laporan->where('tanggal',$currentDate)->findAll();
        $data['laporankeluar'] = $laporan->keluar();
        $data['laporanmasuk'] = $laporan->masuk();
        foreach ($data['laporan'] as &$item) {
            $idKasKeluar = $item['kas_keluar_id'];
            $idKasMasuk = $item['kas_masuk_id'];
            // Retrieve "masuk" data based on id_kas_keluar
            $item['masuk'] = $laporan2->where('id_kas_masuk', $idKasMasuk)->findAll();
        
            // Retrieve "keluar" data based on id_kas_keluar
            $item['keluar'] = $laporan1->where('id_kas_keluar', $idKasKeluar)->findAll();
            
        }
        unset($item);
        $data['tanggal'] = $currentDate;
            // dd($data);
        return view('layout/kas/laporan', $data);
    }

    public function generatePdf()
    {
        $laporan = new Laporan();
        $laporan2 = new KasMasuk();
        $laporan1 = new KasKeluar();
        // $laporan1 = new KasKeluar();
        // $data['laporan'] = $laporan->penjualan()->groupBy('kas_masuk.created_at', 'desc')->findAll();
        $currentDate = $this->request->getGet('tanggal');
        $data['laporan'] = $laporan->where('tanggal',$currentDate)->findAll();
        $data['laporankeluar'] = $laporan->keluar();
        $data['laporanmasuk'] = $laporan->masuk();
        foreach ($data['laporan'] as &$item) {
            $idKasKeluar = $item['kas_keluar_id'];
            $idKasMasuk = $item['kas_masuk_id'];
            // Retrieve "masuk" data based on id_kas_keluar
            $item['masuk'] = $laporan2->where('id_kas_masuk', $idKasMasuk)->findAll();
        
            // Retrieve "keluar" data based on id_kas_keluar
            $item['keluar'] = $laporan1->where('id_kas_keluar', $idKasKeluar)->findAll();
            
        }
        unset($item);
        $data['tanggal'] = $currentDate;
            // dd($data);

        $mpdf = new Mpdf();
        $html = view('layout/kas/print', $data);
        $mpdf->WriteHTML($html);
        $mpdf->Output('laporan.pdf', 'D'); // Menampilkan PDF di browser
    }

    public function print(){
        $laporan = new Laporan();

        $laporan2 = new KasMasuk();
        $laporan1 = new KasKeluar();
        // $laporan1 = new KasKeluar();
        // $data['laporan'] = $laporan->penjualan()->groupBy('kas_masuk.created_at', 'desc')->findAll();
        $currentDate = $this->request->getGet('tanggal');
        $data['laporan'] = $laporan->where('tanggal', $currentDate)->findAll();
        $data['laporankeluar'] = $laporan->keluar();
        $data['laporanmasuk'] = $laporan->masuk();
        foreach ($data['laporan'] as &$item) {
            $idKasKeluar = $item['kas_keluar_id'];
            $idKasMasuk = $item['kas_masuk_id'];
            // Retrieve "masuk" data based on id_kas_keluar
            $item['masuk'] = $laporan2->where('id_kas_masuk', $idKasMasuk)->findAll();
        
            // Retrieve "keluar" data based on id_kas_keluar
            $item['keluar'] = $laporan1->where('id_kas_keluar', $idKasKeluar)->findAll();
            
        }
        unset($item);
        $data['tanggal'] = $currentDate;
        
        return view('layout/kas/laporan', $data);
    }
}
