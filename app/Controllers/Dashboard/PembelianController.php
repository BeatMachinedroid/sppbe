<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\Pembelian;
use App\Models\KasKeluar;
use Carbon\Carbon; 



class PembelianController extends BaseController
{
    public function index()
    {
        $pager = \Config\Services::pager();
        $model = new Pembelian();

        $data['pembelian'] = $model->paginate(5, 'pembelian');
        $data['pager'] = $model->pager;
        $data['page'] = $this->request->getVar('page') ? $this->request->getVar('page') : 1;
        // dd($data);
        return view('layout/pembelian/pembelian', $data);
    }

    public function store(){
        $pembelian = new Pembelian();
        $data = [
            'keterangan_pembelian' => $this->request->getPost('keterangan'),
			'jumlah' => $this->request->getPost('jumlah'),
			'total' => $this->request->getPost('total'),
            'tanggal' => $this->request->getPost('tanggal'),
            'barang' => $this->request->getPost('barang'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];      
        $pembelian->insert($data);
        $pembelianId = $pembelian->insertID();
            $keluar = new KasKeluar();
            $data2 = [
                'pembelian_id' => $pembelianId,
                'jenis_kas_id' => 1,
                'keterangan' => $this->request->getPost('keterangan'),
                'total_keluar' => $this->request->getPost('total'),
                'tanggal' => $this->request->getPost('tanggal'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
            $keluar->insert($data2);

        return redirect()->to(base_url('/dashboard/pembelian'))->with('success', 'Data Added Successfully');
    }

    public function edit($id){
        $pembelian = new Pembelian();
        $data = [
            'keterangan_pembelian' => $this->request->getPost('keterangan'),
			'jumlah' => $this->request->getPost('jumlah'),
			'total' => $this->request->getPost('total'),
            'tanggal' => $this->request->getPost('tanggal'),
            'barang' => $this->request->getPost('barang'),
            'updated_at' => Carbon::now(),
        ];      
        $pembelian->update($id, $data);;
        return redirect()->to(base_url('/dashboard/pembelian'))->with('success', 'Data Edited Successfully');
    }

    public function delete($id) {
        $pembelian = new Pembelian();
        $pembelian->delete($id);
        return redirect()->to(base_url('/dashboard/pembelian'))->with('success', 'Data Deleted Successfully');
    }

    public function search()
    {
        $pager = \Config\Services::pager();
        $model = new Pembelian();
        $search = $this->request->getGet('search');

        $data['pembelian'] = $model->paginate(5, 'pembelian');
        $data['pembelian'] = $model->like('tanggal', $search)->paginate(5);
        $data['pager'] = $model->pager;
        $data['page'] = $this->request->getVar('page') ? $this->request->getVar('page') : 1;
        return view('layout/pembelian/pembelian', $data);

    }
}
