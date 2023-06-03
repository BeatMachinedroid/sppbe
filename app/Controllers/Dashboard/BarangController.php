<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\Barang;
use Carbon\Carbon;
class BarangController extends BaseController
{
    public function index()
    {
        $pager = \Config\Services::pager();
        $barang = new Barang();
        $data['barang'] = $barang->paginate(5 , 'barang');
        $data['pager'] = $barang->pager;
        $data['page'] = $this->request->getVar('page') ? $this->request->getVar('page') : 1;
        return view('layout/barang/barang_add', $data);
    }

    public function store()
    {
        $barang = new Barang();

        $data = [
            'nama' => $this->request->getPost('nama'),
			'stok' => $this->request->getPost('stok'),
			'harga_jual' => $this->request->getPost('harga-jual'),
			'harga_beli' => $this->request->getPost('harga-beli'),
        ];
        // dd($data);
        $barang->insert($data);
        $barang->create_at = Carbon::now();
        return redirect()->to(base_url('/dashboard/barang'))->with('success', 'Data Added Successfully');
    }

    public function edit($id)
    {
        $barang = new Barang();
        $data = [
            'nama' => $this->request->getPost('nama'),
			'stok' => $this->request->getPost('stok'),
			'harga_jual' => $this->request->getPost('harga-jual'),
			'harga_beli' => $this->request->getPost('harga-beli'),
        ];
        // dd($data);
        $barang->update($id, $data);
        $barang->updated_at = Carbon::now();
        return redirect()->to(base_url('/dashboard/barang'))->with('success', 'Data Edit Successfully');
    }

    public function delete($id)
    {
        $barang = new Barang();
        $barang->delete($id);
        return redirect()->to(base_url('/dashboard/barang'))->with('success', 'Data Deleted Successfully');
    }

    public function search()
    {
        $barang = new Barang();
        $search = $this->request->getGet('search');
        $data['barang'] = $barang->like('nama', $search)->paginate(5);
        $data['pager'] = $barang->pager;
        $data['page'] = $this->request->getVar('page') ? $this->request->getVar('page') : 1;
        return view('layout/barang/barang_add', $data);
    }
}
