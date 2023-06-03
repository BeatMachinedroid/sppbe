<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\KasMasuk;
use Carbon\Carbon;
class KasMasukController extends BaseController
{
    public function index()
    {
        $pager = \Config\Services::pager();
        $masuk = new KasMasuk();
        $data['masuk'] = $masuk->user();
        $data['pager'] = $masuk->pager;
        $data['page'] = $this->request->getVar('page') ? $this->request->getVar('page') : 1;
        // dd($data);
        return view('layout/kas/kasmasuk', $data);
    }

    public function store()
    {
        $masuk = new KasMasuk();
        $data = [
            'user_id' => $this->request->getPost('user'),
			'jenis_kas' => $this->request->getPost('jenis'),
			'keterangan' => $this->request->getPost('keterangan'),
			'total_masuk' => $this->request->getPost('total'),
        ];

        $masuk->insert($data);
        $masuk->create_at = Carbon::now();
        return redirect()->to(base_url('/dashboard/kas/masuk'))->with('success', 'Data Added Successfully');
    }

    public function edit($id)
    {
        $masuk = new KasMasuk();
        $data = [
			'jenis_kas' => $this->request->getPost('jenis'),
			'keterangan' => $this->request->getPost('keterangan'),
			'total_masuk' => $this->request->getPost('total'),
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
        $data['masuk'] = $masuk->like('jenis_kas', $search)->paginate(5);
        $data['pager'] = $masuk->pager;
        $data['page'] = $this->request->getVar('page') ? $this->request->getVar('page') : 1;
        return view('layout/kas/kasmasuk', $data);
    }
}
