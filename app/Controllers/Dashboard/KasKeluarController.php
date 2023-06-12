<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\KasKeluar;
use App\Models\Laporan;
use Carbon\Carbon;

class KasKeluarController extends BaseController
{
    public function index()
    {
        $pager = \Config\Services::pager();
        $keluar = new KasKeluar();
        $data['keluar'] = $keluar->paginate(5, 'keluar');
        $data['pager'] = $keluar->pager;
        $data['page'] = $this->request->getVar('page') ? $this->request->getVar('page') : 1;
        // dd($data);
        return view('layout/kas/kaskeluar', $data);
    }

    public function store()
    {
        $keluar = new KasKeluar();
        $data = [
			'jenis_kas' => $this->request->getPost('jenis'),
			'keterangan' => $this->request->getPost('keterangan'),
			'total' => $this->request->getPost('total'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        $keluar->insert($data);
        return redirect()->to(base_url('/dashboard/kas/keluar'))->with('success', 'Data Added Successfully');
    }

    public function edit($id)
    {
        $keluar = new KasKeluar();
        $data = [
			'jenis_kas' => $this->request->getPost('jenis'),
			'keterangan' => $this->request->getPost('keterangan'),
			'total' => $this->request->getPost('total'),
        ];

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
        $search = $this->request->getGet('search');
        $data['keluar'] = $keluar->like('jenis_kas', $search)->paginate(5);
        $data['pager'] = $keluar->pager;
        $data['page'] = $this->request->getVar('page') ? $this->request->getVar('page') : 1;
        return view('layout/kas/kaskeluar', $data);
    }
}
