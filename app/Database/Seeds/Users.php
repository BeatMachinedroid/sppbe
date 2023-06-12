<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Carbon\Carbon;

class Users extends Seeder
{
    public function run()
    {
        $this->db->table('users')->insert([
            'username' => 'Administrator',
            'email' => 'yohanesseptian34@gmail.com',
            'password' => password_hash('230999', PASSWORD_DEFAULT),
            'role' => 'admin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $this->db->table('users')->insert([
            'username' => 'Pegawai',
            'email' => 'yohanesseptian3@gmail.com',
            'password' => password_hash('230999', PASSWORD_DEFAULT),
            'role' => 'pegawai',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $this->db->table('users')->insert([
            'username' => 'Pemilik',
            'email' => 'yohanesseptian4@gmail.com',
            'password' => password_hash('230999', PASSWORD_DEFAULT),
            'role' => 'pemilik',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        $this->db->table('barang')->insert([
            'nama' => 'gas',
            'harga_jual' => '10000',
            'harga_beli' => '9000',
            'stok' => '30',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}
