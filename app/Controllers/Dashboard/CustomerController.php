<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\Customer;
use Carbon\Carbon;

class CustomerController extends BaseController
{
    public function index()
    {
        $pager = \Config\Services::pager();
        $customer = new Customer();
        $data['customer'] = $customer->paginate(10 , 'customer');
        $data['pager'] = $customer->pager;
        $data['page'] = $this->request->getVar('page_customer') ? $this->request->getVar('page_customer') : 1;
        return view('layout/Customer/Customer', $data);
    }
    
    public function store(){
        $customer =  new Customer();
        $data = [
            'nama_customer' =>  $this->request->getPost('customer'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $customer->insert($data);
        return redirect()->to(base_url('/dashboard/customer'))->with('success', 'Data Added Successfully');
    }

    public function edit($id){
        $customer =  new Customer();
        $data = [
            'nama_customer' =>  $this->request->getPost('customer'),
        ];
        $customer->update($id, $data);
        $customer->updated_at = Carbon::now();
        return redirect()->to(base_url('/dashboard/customer'))->with('success', 'Data Edited Successfully');
    }

    public function delete($id){
        $customer = new Customer();
        $customer->delete($id);
        return redirect()->to(base_url('/dashboard/customer'))->with('success', 'Data Deleted Successfully');
    }

    public function search()
    {
        $customer = new Customer();
        $search = $this->request->getGet('name');
        $data['customer'] = $customer->like('nama_customer', $search)->paginate(5); 
        $data['pager'] = $customer->pager;
        $data['page'] = $this->request->getVar('page') ? $this->request->getVar('page') : 1;
        return view('layout/Customer/Customer', $data);
    }
}
