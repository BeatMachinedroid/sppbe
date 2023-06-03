<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\Penjualan;
use App\Models\KasMasuk;
use App\Models\barang;
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
        $barang = new Barang();

        $data['penjualan'] = $model->barang();
        $data['barang'] = $barang->findAll();
        $data['pager'] = $model->pager;
        $data['page'] = $this->request->getVar('page') ? $this->request->getVar('page') : 1;
        // dd($data);
        return view('layout/penjualan/penjualan', $data);
    }

    public function store()
    {
        $penjualan = new Penjualan();
        $barang = new Barang();
        $brg = $barang->find($this->request->getPost('barang'));
        $data = [
            'barang_id' => $this->request->getPost('barang'),
            'pelanggan' => $this->request->getPost('pelanggan'),
			'jumlah' => $this->request->getPost('jumlah'),
			'total' => $brg['harga_jual'] * $this->request->getPost('jumlah'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        
        $penjualan->insert($data);

        $penjualanId = $penjualan->insertID();

                $masuk = new KasMasuk();
                $data2 = [
                    'user_id' => $this->request->getPost('user'),
                    'penjualan_id' => $penjualanId,
                    'jenis_kas' => 'penjualan',
                    'keterangan' => 'keuntungan penjualan',
                    'total_masuk' => $brg['harga_jual'] * $this->request->getPost('jumlah') - $brg['harga_beli'] * $this->request->getPost('jumlah'),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ];

                $masuk->insert($data2);
        
        // dd($penjualanId);
        return redirect()->to(base_url('/dashboard/penjualan'))->with('success', 'Data Added Successfully');
    }

    public function edit($id)
    {
        $penjualan = new Penjualan();
        $barang = new Barang();
        $brg = $barang->find($this->request->getPost('barang'));
        $data = [
            'barang_id' => $this->request->getPost('barang'),
			'jumlah' => $this->request->getPost('jumlah'),
			'total' => $brg['harga_jual'] * $this->request->getPost('jumlah'),
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
        $search = $this->request->getGet('search');
        $data['penjualan'] = $penjualan->like('nama', $search)->paginate(5);
        $data['pager'] = $penjualan->pager;
        $data['page'] = $this->request->getVar('page') ? $this->request->getVar('page') : 1;
        return view('layout/penjualan/penjualan', $data);
    }
}
