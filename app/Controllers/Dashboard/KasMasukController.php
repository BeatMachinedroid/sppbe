<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\KasMasuk;
use App\Models\Penjualan;
use App\Models\JenisKas;
use Carbon\Carbon;
class KasMasukController extends BaseController
{
    public function index()
    {
        $pager = \Config\Services::pager();
        $masuk = new KasMasuk();
        $jenis = new JenisKas();
        // $data['customer'] = $customer->findAll();
        // $data['check'] = $masuk->findall();
        // $check = $data['check'];
        $data['masuk'] = $masuk->penjualan();
        // $data['masuk'] = $masuk->pembelian();
        $data['jenis'] = $jenis->findAll();
        $data['pager'] = $masuk->pager;
        $data['page'] = $this->request->getVar('page') ? $this->request->getVar('page') : 1;
        // dd($data);  
        // dd($data);
        return view('layout/kas/kasmasuk', $data);
    }

    public function store()
    {
        $masuk = new KasMasuk();
        $data = [
			'jenis_kas_id' => $this->request->getPost('jenis'),
			'keterangan' => $this->request->getPost('keterangan'),
			'total_masuk' => $this->request->getPost('total'),
            'tanggal' => $this->request->getPost('tanggal'),
        ];
        $masuk->insert($data);
        $masuk->created_at = Carbon::now();
        return redirect()->to(base_url('/dashboard/kas/masuk'))->with('success', 'Data Added Successfully');
    }

    public function edit($id)
    {
        $masuk = new KasMasuk();
        $data = [
			'jenis_kas' => $this->request->getPost('jenis'),
			'keterangan' => $this->request->getPost('keterangan'),
			'total_masuk' => $this->request->getPost('total'),
            'tanggal' => $this->request->getPost('tanggal'),
        ];

        $masuk->update($id , $data);
        $masuk->updated_at = Carbon::now();
        return redirect()->to(base_url('/dashboard/kas/masuk'))->with('success', 'Data Edit Successfully');
    }

    public function delete($id)
    {
        $masuk = new KasMasuk();
        $masuk->delete($id);
        return redirect()->to(base_url('/dashboard/kas/masuk'))->with('success', 'Data Delete Successfully');
    }

    public function search()
    {
        $masuk = new KasMasuk();
        $search = $this->request->getGet('search');
        $data['masuk'] = $masuk->like('kas_masuk.tanggal', $search)->penjualan();
        $data['pager'] = $masuk->pager;
        $data['page'] = $this->request->getVar('page') ? $this->request->getVar('page') : 1;
        return view('layout/kas/kasmasuk', $data);
    }
}
