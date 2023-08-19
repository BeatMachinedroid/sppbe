<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\Penjualan;
use App\Models\KasMasuk;
use App\Models\customer;
use App\Models\Laporan;
use Carbon\Carbon; 

class PenjualanController extends BaseController
{
    // public function __construct(type $ = null)
    // {
    //     $this->penjualan = new Penjualan();
    //     $this->barang = new Barang();
    // }

    public function index()
    {
        $pager = \Config\Services::pager();
        $model = new Penjualan();
        $customer = new Customer();

        $data['penjualan'] = $model->customers();
        $data['customer'] = $customer->findAll();
        $data['pager'] = $model->pager;
        $data['page'] = $this->request->getVar('page_penjualan') ? $this->request->getVar('page_penjualan') : 1;
        // dd($data);
        return view('layout/penjualan/penjualan', $data);
    }

    public function store()
    {
        $penjualan = new Penjualan();
        $customer = new Customer();
        // $brg = $customer->find($this->request->getPost('customer_id'));
        $data = [
            'customer_id' => $this->request->getPost('customer_id'),
            'keterangan_penjualan' => $this->request->getPost('keterangan'),
			'jumlah' => $this->request->getPost('jumlah'),
			'total' => $this->request->getPost('total'),
            'tanggal' => $this->request->getPost('tanggal'),
            'barang' => $this->request->getPost('barang'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];      
        $penjualan->insert($data);
        $penjualanId = $penjualan->insertID();
            $masuk = new KasMasuk();
            $customerket = $customer->where('id_customer' , $this->request->getPost('customer_id'))->first();
            $data2 = [
                'penjualan_id' => $penjualanId,
                'keterangan' => $customerket['nama_customer'],
                'total_masuk' => $this->request->getPost('total'),
                'tanggal' => $this->request->getPost('tanggal'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
            $masuk->insert($data2);
            $masukId = $masuk->insertID();
            $laporan = new Laporan();
            $data3 = [
                'kas_masuk_id' => $masukId,
                'keterangan' => $this->request->getPost('keterangan'),
                'tanggal' => $this->request->getPost('tanggal'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
            $laporan->insert($data3);

        return redirect()->to(base_url('/dashboard/penjualan'))->with('success', 'Data Added Successfully');
    }

    public function edit($id)
    {
        $penjualan = new Penjualan();
        $data = [
            'customer_id' => $this->request->getPost('customer_id'),
            'keterangan_penjualan' => $this->request->getPost('keterangan'),
			'jumlah' => $this->request->getPost('jumlah'),
			'total' => $this->request->getPost('total'),
            'tanggal' => $this->request->getPost('tanggal'),
            'barang' => $this->request->getPost('barang'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        // dd($data);
        $penjualan->update($id, $data);
        $penjualan->updated_at = Carbon::now();
        return redirect()->to(base_url('/dashboard/penjualan'))->with('success', 'Data Edit Successfully');
    }

    public function delete($id)
    {
        $penjualan = new Penjualan();
        $penjualan->delete($id);
        return redirect()->to(base_url('/dashboard/penjualan'))->with('success', 'Data Deleted Successfully');
    }

    public function search()
    {
        $penjualan = new Penjualan();
        $customer = new Customer();
        $search = $this->request->getGet('search');
        $data['customer'] = $customer->findAll();
        $data['penjualan'] = $penjualan->like('tanggal', $search)->paginate(5);
        $data['pager'] = $penjualan->pager;
        $data['page'] = $this->request->getVar('page') ? $this->request->getVar('page') : 1;
        return view('layout/penjualan/penjualan', $data);
    }
}
