<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\KasKeluar;
use App\Models\Laporan;
use App\Models\Pembelian;
use App\Models\JenisKas;
use Carbon\Carbon;

class KasKeluarController extends BaseController
{
    public function index()
    {
        $pager = \Config\Services::pager();
        $keluar = new KasKeluar();
        $jenis = new JenisKas();
        // $data['customer'] = $customer->findAll();
        // $data['check'] = $keluar->findall();
        // $check = $data['check'];
        $data['keluar'] = $keluar->pembelian();
        // $data['keluar'] = $keluar->pembelian();
        $data['jenis'] = $jenis->findAll();
        $data['pager'] = $keluar->pager;
        $data['page'] = $this->request->getVar('page') ? $this->request->getVar('page') : 1;
        // dd($data);  
        return view('layout/kas/kaskeluar', $data);
    }

    public function store()
    {
        $keluar = new KasKeluar();
        $data = [
			'jenis_kas_id' => $this->request->getPost('jenis'),
			'keterangan' => $this->request->getPost('keterangan'),
			'total' => $this->request->getPost('total'),
            'tanggal' => $this->request->getPost('tanggal'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        $keluar->insert($data);
        return redirect()->to(base_url('/dashboard/kas/keluar'))->with('success', 'Data Added Successfully');
    }

    public function edit($id)
    {
        $keluar = new Kaskeluar();
        $data = [
			'jenis_kas_id' => $this->request->getPost('jenis'),
			'keterangan' => $this->request->getPost('keterangan'),
			'total_keluar' => $this->request->getPost('total'),
            'tanggal' => $this->request->getPost('tanggal'),
        ];
        // dd($data);
        $keluar->update($id , $data);
        $keluar->updated_at = Carbon::now();
        return redirect()->to(base_url('/dashboard/kas/keluar'))->with('success', 'Data Edit Successfully');
    }

    public function delete($id)
    {
        $keluar = new KasKeluar();
        $keluar->delete($id);
        return redirect()->to(base_url('/dashboard/kas/keluar'))->with('success', 'Data Delete Successfully');
    }

    public function search()
    {
        $keluar = new KasKeluar();
        $jenis = new JenisKas();
        // $data['customer'] = $customer->findAll();
        $search = $this->request->getGet('search');
        $data['keluar'] = $keluar->like('kas_keluar.tanggal', $search)->pembelian();
        $data['jenis'] = $jenis->findAll();
        $data['pager'] = $keluar->pager;
        $data['page'] = $this->request->getVar('page') ? $this->request->getVar('page') : 1;
        // dd($data);
        return view('layout/kas/kaskeluar', $data);
    }
}
