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
            'email' => 'admin@gmail.com',
            'password' => password_hash('12345678', PASSWORD_DEFAULT),
            'role' => 'admin',
            
            'updated_at' => Carbon::now(),
        ]);
        
        $customer = ([
            [
                'nama_customer' => 'PT. BUANA GLOBAL SEMESTA',
                
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_customer' => 'PT. CAHAYA BUMI PERSADA',
                
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_customer' => 'PT. KEMBAR KENCANA',
                
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_customer' => 'PT. KEMBAR KENCANA PUTRA',
                
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_customer' => 'PT. SEJAHTERA',
                
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_customer' => 'PT. BUANA GLOBAL SEMESTA',
                
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_customer' => 'PT. CAHAYA BUMI PERSADA',
                
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_customer' => 'PT. TANGGAMUS BAROKAH BERSAMA',
                
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_customer' => 'PT. ARNATA ZEWIN SEJATI',
                
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_customer' => 'PT. CAHAYA BUMI PERSADA',
                
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_customer' => 'PT. DINAR SENTAUSA',
                
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_customer' => 'PT. LAMPUNG PESISIR GAS',
                
                'updated_at' => Carbon::now(),
            ],
        ]);
        $this->db->table('customer')->insertBatch($customer);

        $jenis_kas = ([
            [
                'nama' => 'External',
            ],
            [
                'nama' => 'Internal',
            ],
        ]);

        $this->db->table('jenis_kas')->insertBatch($jenis_kas);

        $penjualan = [
            [
                'customer_id' => 1,
                'barang' => 'gas 5kg',
                'jumlah' => 5,
                'keterangan_penjualan' => 'Penjualan Gas Lpg',
                'total' => '33000',
                'tanggal' => '2023-05-17',
                
            ],
            [
                'customer_id' => 2,
                'barang' => 'gas 5kg',
                'jumlah' => 5,
                'keterangan_penjualan' => 'Penjualan Gas Lpg',
                'total' => '33000',
                'tanggal' => '2023-05-17',
                
            ],
            [
                'customer_id' => 3,
                'barang' => 'gas 5kg',
                'jumlah' => 5,
                'keterangan_penjualan' => 'Penjualan Gas Lpg',                
                'total' => '33000',
                'tanggal' => '2023-05-17',
                
            ],
            [
                'customer_id' => 4,
                'barang' => 'gas 5kg',
                'jumlah' => 5,
                'keterangan_penjualan' => 'Penjualan Gas Lpg',           
                'total' => '33000',
                'tanggal' => '2023-05-17',
                
            ],
            [
                'customer_id' => 5,
                'barang' => 'gas 5kg',
                'jumlah' => 5,
                'keterangan_penjualan' => 'Penjualan Gas Lpg',           
                'total' => '33000',
                'tanggal' => '2023-05-17',
                
            ],
    ];
    $this->db->table('penjualan')->insertBatch($penjualan);

    $data_pembelian = [
        [
            
            'jenis_kas_id' => 2,
            'keterangan_pembelian' => 'GULA',
            'jumlah' => 1,
            'total' => '30000',
            'tanggal' => '2023-05-17',
                
        ],[
            
            'jenis_kas_id' => 2,
            'keterangan_pembelian' => 'KOPI',
            'jumlah' => 1,
            'total' => '36000',
            'tanggal' => '2023-05-17',
                
        ],[
            
            'jenis_kas_id' => 2,
            'keterangan_pembelian' => 'NASI OPERATOR',
            'jumlah' => 1,
            'total' => '140000',
            'tanggal' => '2023-05-17',
                
        ],[
            
            'jenis_kas_id' => 2,
            'keterangan_pembelian' => 'POP MIE JUMAT',
            'jumlah' => 1,
            'total' => '110000',
            'tanggal' => '2023-05-17',
                
        ],[
            
            'jenis_kas_id' => 2,
            'keterangan_pembelian' => 'TEH',
            'jumlah' => 1,
            'total' => '7000',
            'tanggal' => '2023-05-17',
                
        ],[
            
            'jenis_kas_id' => 2,
            'keterangan_pembelian' => 'GALON REFIL',
            'jumlah' => 1,
            'total' => '30000',
            'tanggal' => '2023-05-17',
                
        ],
        // ===========================================
        [
            
            'jenis_kas_id' => 2,
            'keterangan_pembelian' => 'GALON REFIL',
            'jumlah' => 1,
            'total' => '30000',
            'tanggal' => '2023-05-22',
                
        ],
        [
            
            'jenis_kas_id' => 2,
            'keterangan_pembelian' => 'CLING KACA',
            'jumlah' => 1,
            'total' => '12000',
            'tanggal' => '2023-05-22',
                
        ],
        [
            
            'jenis_kas_id' => 2,
            'keterangan_pembelian' => 'SABUN FILLING',
            'jumlah' => 1,
            'total' => '10000',
            'tanggal' => '2023-05-22',
                
        ],
        [
            
            'jenis_kas_id' => 2,
            'keterangan_pembelian' => 'WIPOL',
            'jumlah' => 1,
            'total' => '15000',
            'tanggal' => '2023-05-22',
                
        ],
        [
            
            'jenis_kas_id' => 2,
            'keterangan_pembelian' => 'GULA',
            'jumlah' => 1,
            'total' => '23000',
            'tanggal' => '2023-05-22',
                
        ],
        [
            
            'jenis_kas_id' => 2,
            'keterangan_pembelian' => 'KOPI',
            'jumlah' => 1,
            'total' => '20000',
            'tanggal' => '2023-05-22',
                
        ],
        // =========================================
        [
            
            'jenis_kas_id' => 2,
            'keterangan_pembelian' => 'WD GREEN SN350',
            'jumlah' => 1,
            'total' => '365000',
            'tanggal' => '2023-05-22',
                
        ], 
        [
            
            'jenis_kas_id' => 2,
            'keterangan_pembelian' => 'KINGSTON FURY BEAST DDR4',
            'jumlah' => 1,
            'total' => '340000',
            'tanggal' => '2023-05-22',
                
        ], 
        [
            
            'jenis_kas_id' => 2,
            'keterangan_pembelian' => 'M.2 SCREW',
            'jumlah' => 1,
            'total' => '10000',
            'tanggal' => '2023-05-22',
                
        ], 
        [
            
            'jenis_kas_id' => 2,
            'keterangan_pembelian' => 'BIAYA SERVICE',
            'jumlah' => 1,
            'total' => '50000',
            'tanggal' => '2023-05-22',
                
        ], 
        [
            
            'jenis_kas_id' => 2,
            'keterangan_pembelian' => 'BIAYA SERVICE',
            'jumlah' => 1,
            'total' => '50000',
            'tanggal' => '2023-05-22',
                
        ], 
        [
            
            'jenis_kas_id' => 2,
            'keterangan_pembelian' => 'CRUSIAL SO-DIMM DDR4 8Gb 3200MHz',
            'jumlah' => 1,
            'total' => '50000',
            'tanggal' => '2023-05-22',
                
        ], 
    ];
    $this->db->table('pembelian')->insertBatch($data_pembelian);

        $data_kasmasuk = [
            [
                'penjualan_id' => 1,
                'keterangan' => 'PT. BUANA GLOBAL SEMESTA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                
            ],
            [
                'penjualan_id' => 2,
                'keterangan' => 'PT. CAHAYA BUMI PERSADA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                
            ],
            [
                'penjualan_id' => 3,
                'keterangan' => 'PT. KEMBAR KENCANA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                
            ],
            [
                'penjualan_id' => 4,
                'keterangan' => 'PT. KEMBAR KENCANA PUTRA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                
            ],
            [
                'penjualan_id' => 5,
                'keterangan' => 'PT. SEJAHTERA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                
            ],
        ];
    $this->db->table('kas_masuk')->insertBatch($data_kasmasuk);

    $data_kaskeluar = [
        [
            'jenis_kas_id' => '1',
            'pembelian_id' => '1',
            'keterangan' => 'GULA',
            'total_keluar' => '30000',
            'tanggal' => '2023-05-17',
                
        ],[
            'jenis_kas_id' => '1',
            'pembelian_id' => '2',
            'keterangan' => 'KOPI',
            'total_keluar' => '36000',
            'tanggal' => '2023-05-17',
                
        ],[
            'jenis_kas_id' => '1',
            'pembelian_id' => '3',
            'keterangan' => 'NASI OPERATOR',
            'total_keluar' => '140000',
            'tanggal' => '2023-05-17',
                
        ],[
            'jenis_kas_id' => '1',
            'pembelian_id' => '4',
            'keterangan' => 'POP MIE JUMAT',
            'total_keluar' => '110000',
            'tanggal' => '2023-05-17',
                
        ],[
            'jenis_kas_id' => '1',
            'pembelian_id' => '5',
            'keterangan' => 'TEH',
            'total_keluar' => '7000',
            'tanggal' => '2023-05-17',
                
        ],[
            'jenis_kas_id' => '1',
            'pembelian_id' => '6',
            'keterangan' => 'GALON REFIL',
            'total_keluar' => '30000',
            'tanggal' => '2023-05-17',
                
        ],
        // ===========================================
        [
            'jenis_kas_id' => '1',
            'pembelian_id' => '7',
            'keterangan' => 'GALON REFIL',
            'total_keluar' => '30000',
            'tanggal' => '2023-05-22',
                
        ],
        [
            'jenis_kas_id' => '1',
            'pembelian_id' => '8',
            'keterangan' => 'CLING KACA',
            'total_keluar' => '12000',
            'tanggal' => '2023-05-22',
                
        ],
        [
            'jenis_kas_id' => '1',
            'pembelian_id' => '9',
            'keterangan' => 'SABUN FILLING',
            'total_keluar' => '10000',
            'tanggal' => '2023-05-22',
                
        ],
        [
            'jenis_kas_id' => '1',
            'pembelian_id' => '10',
            'keterangan' => 'WIPOL',
            'total_keluar' => '15000',
            'tanggal' => '2023-05-22',
                
        ],
        [
            'jenis_kas_id' => '1',
            'pembelian_id' => '11',
            'keterangan' => 'GULA',
            'total_keluar' => '23000',
            'tanggal' => '2023-05-22',
                
        ],
        [
            'jenis_kas_id' => '1',
            'pembelian_id' => '12',
            'keterangan' => 'KOPI',
            'total_keluar' => '20000',
            'tanggal' => '2023-05-22',
                
        ],
        // =========================================
        [
            'jenis_kas_id' => '1',
            'pembelian_id' => '13',
            'keterangan' => 'WD GREEN SN350',
            'total_keluar' => '365000',
            'tanggal' => '2023-05-22',
                
        ], 
        [
            'jenis_kas_id' => '1',
            'pembelian_id' => '14',
            'keterangan' => 'KINGSTON FURY BEAST DDR4',
            'total_keluar' => '340000',
            'tanggal' => '2023-05-22',
                
        ], 
        [
            'jenis_kas_id' => '1',
            'pembelian_id' => '15',
            'keterangan' => 'M.2 SCREW',
            'total_keluar' => '10000',
            'tanggal' => '2023-05-22',
                
        ], 
        [
            'jenis_kas_id' => '1',
            'pembelian_id' => '16',
            'keterangan' => 'BIAYA SERVICE',
            'total_keluar' => '50000',
            'tanggal' => '2023-05-22',
                
        ], 
        [
            'jenis_kas_id' => '1',
            'pembelian_id' => '17',
            'keterangan' => 'BIAYA SERVICE',
            'total_keluar' => '50000',
            'tanggal' => '2023-05-22',
                
        ], 
        [
            'jenis_kas_id' => '1',
            'pembelian_id' => '18',
            'keterangan' => 'CRUSIAL SO-DIMM DDR4 8Gb 3200MHz',
            'total_keluar' => '50000',
            'tanggal' => '2023-05-22',
                
        ], 
    ];
    $this->db->table('kas_keluar')->insertBatch($data_kaskeluar);
    

}


}
