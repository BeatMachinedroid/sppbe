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
        $data['MasukIntern'] = $laporan->where('date(tanggal)', $currentDate)->where('jenis_kas_id', 1)->findAll();
        $data['MasukExtern'] = $laporan->where('date(tanggal)', $currentDate)->where('jenis_kas_id', 2)->findAll();
        $data['KeluarIntern'] = $laporankel->where('date(tanggal)', $currentDate)->where('jenis_kas_id', 1)->findAll();
        $data['KeluarExtern'] = $laporankel->where('date(tanggal)', $currentDate)->where('jenis_kas_id', 2)->findAll();
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
        $data['MasukIntern'] = $laporan->where('date(tanggal)', $currentDate)->where('jenis_kas_id', 1)->findAll();
        $data['MasukExtern'] = $laporan->where('date(tanggal)', $currentDate)->where('jenis_kas_id', 2)->findAll();
        $data['KeluarIntern'] = $laporankel->where('date(tanggal)', $currentDate)->where('jenis_kas_id', 1)->findAll();
        $data['KeluarExtern'] = $laporankel->where('date(tanggal)', $currentDate)->where('jenis_kas_id', 2)->findAll();
        $data['tanggal'] = $currentDate;
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
        $data['MasukIntern'] = $laporan->where('date(tanggal)', $currentDate)->where('jenis_kas_id', 1)->findAll();
        $data['MasukExtern'] = $laporan->where('date(tanggal)', $currentDate)->where('jenis_kas_id', 2)->findAll();
        $data['KeluarIntern'] = $laporankel->where('date(tanggal)', $currentDate)->where('jenis_kas_id', 1)->findAll();
        $data['KeluarExtern'] = $laporankel->where('date(tanggal)', $currentDate)->where('jenis_kas_id', 2)->findAll();
        $data['tanggal'] = $currentDate;
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
        $data['MasukIntern'] = $laporan->where('date(tanggal)', $currentDate)->where('jenis_kas_id', 1)->findAll();
        $data['MasukExtern'] = $laporan->where('date(tanggal)', $currentDate)->where('jenis_kas_id', 2)->findAll();
        $data['KeluarIntern'] = $laporankel->where('date(tanggal)', $currentDate)->where('jenis_kas_id', 1)->findAll();
        $data['KeluarExtern'] = $laporankel->where('date(tanggal)', $currentDate)->where('jenis_kas_id', 2)->findAll();
        $data['tanggal'] = $currentDate;
        
        return view('layout/kas/laporan', $data);
    }
}
