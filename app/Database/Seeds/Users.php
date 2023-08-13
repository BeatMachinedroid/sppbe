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
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        $customer = ([
            [
                'nama_customer' => 'PT. BUANA GLOBAL SEMESTA',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_customer' => 'PT. CAHAYA BUMI PERSADA',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_customer' => 'PT. KEMBAR KENCANA',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_customer' => 'PT. KEMBAR KENCANA PUTRA',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_customer' => 'PT. SEJAHTERA',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_customer' => 'PT. BUANA GLOBAL SEMESTA',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_customer' => 'PT. CAHAYA BUMI PERSADA',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_customer' => 'PT. TANGGAMUS BAROKAH BERSAMA',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_customer' => 'PT. ARNATA ZEWIN SEJATI',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_customer' => 'PT. CAHAYA BUMI PERSADA',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_customer' => 'PT. DINAR SENTAUSA',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_customer' => 'PT. LAMPUNG PESISIR GAS',
                'created_at' => Carbon::now(),
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
                'keterangan_penjualan' => 'PT. BUANA GLOBAL SEMESTA',
                'total' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],
            [
                'customer_id' => 1,
                'barang' => 'gas 5kg',
                'jumlah' => 5,
                'keterangan_penjualan' => 'PT. BUANA GLOBAL SEMESTA',
                'total' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],
            [
                'customer_id' => 1,
                'barang' => 'gas 5kg',
                'jumlah' => 5,
                'keterangan_penjualan' => 'PT. CAHAYA BUMI PERSADA',
                'total' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],
            [
                'customer_id' => 1,
                'barang' => 'gas 5kg',
                'jumlah' => 5,
                'keterangan_penjualan' => 'PT. KEMBAR KENCANA',
                'total' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],
            [
                'customer_id' => 1,
                'barang' => 'gas 5kg',
                'jumlah' => 5,
                'keterangan_penjualan' => 'PT. KEMBAR KENCANA',
                'total' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],
    ];
    $this->db->table('penjualan')->insertBatch($penjualan);

    $data_pembelian = [
        [
            
            'barang' => 'GULA',
            'keterangan_pembelian' => 'GULA',
            'jumlah' => 1,
            'total' => '30000',
            'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
        ],[
            
            'barang' => 'KOPI',
            'keterangan_pembelian' => 'KOPI',
            'jumlah' => 1,
            'total' => '36000',
            'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
        ],[
            
            'barang' => 'NASI OPERATOR',
            'keterangan_pembelian' => 'NASI OPERATOR',
            'jumlah' => 1,
            'total' => '140000',
            'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
        ],[
            
            'barang' => 'POP MIE JUMAT',
            'keterangan_pembelian' => 'POP MIE JUMAT',
            'jumlah' => 1,
            'total' => '110000',
            'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
        ],[
            
            'barang' => 'TEH',
            'keterangan_pembelian' => 'TEH',
            'jumlah' => 1,
            'total' => '7000',
            'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
        ],[
            
            'barang' => 'GALON REFIL',
            'keterangan_pembelian' => 'GALON REFIL',
            'jumlah' => 1,
            'total' => '30000',
            'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
        ],
        // ===========================================
        [
            
            'barang' => 'GALON REFIL',
            'keterangan_pembelian' => 'GALON REFIL',
            'jumlah' => 1,
            'total' => '30000',
            'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
        ],
        [
            
            'barang' => 'CLING KACA',
            'keterangan_pembelian' => 'CLING KACA',
            'jumlah' => 1,
            'total' => '12000',
            'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
        ],
        [
            
            'barang' => 'SABUN FILLING',
            'keterangan_pembelian' => 'SABUN FILLING',
            'jumlah' => 1,
            'total' => '10000',
            'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
        ],
        [
            
            'barang' => 'WIPOL',
            'keterangan_pembelian' => 'WIPOL',
            'jumlah' => 1,
            'total' => '15000',
            'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
        ],
        [
            
            'barang' => 'GULA',
            'keterangan_pembelian' => 'GULA',
            'jumlah' => 1,
            'total' => '23000',
            'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
        ],
        [
            
            'barang' => 'KOPI',
            'keterangan_pembelian' => 'KOPI',
            'jumlah' => 1,
            'total' => '20000',
            'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
        ],
        // =========================================
        [
            
            'barang' => 'WD GREEN SN350',
            'keterangan_pembelian' => 'WD GREEN SN350',
            'jumlah' => 1,
            'total' => '365000',
            'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
        ], 
        [
            
            'barang' => 'KINGSTON FURY BEAST DDR4',
            'keterangan_pembelian' => 'KINGSTON FURY BEAST DDR4',
            'jumlah' => 1,
            'total' => '340000',
            'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
        ], 
        [
            
            'barang' => 'M.2 SCREW',
            'keterangan_pembelian' => 'M.2 SCREW',
            'jumlah' => 1,
            'total' => '10000',
            'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
        ], 
        [
            
            'barang' => 'BIAYA SERVICE',
            'keterangan_pembelian' => 'BIAYA SERVICE',
            'jumlah' => 1,
            'total' => '50000',
            'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
        ], 
        [
            
            'barang' => 'BIAYA SERVICE',
            'keterangan_pembelian' => 'BIAYA SERVICE',
            'jumlah' => 1,
            'total' => '50000',
            'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
        ], 
        [
            
            'barang' => 'CRUSIAL SO-DIMM DDR4 8Gb 3200MHz',
            'keterangan_pembelian' => 'CRUSIAL SO-DIMM DDR4 8Gb 3200MHz',
            'jumlah' => 1,
            'total' => '50000',
            'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
        ], 
    ];
    $this->db->table('pembelian')->insertBatch($data_pembelian);

        $data_kasmasuk = [
            [
                'jenis_kas_id' => 2,
                
                'keterangan' => 'PT. BUANA GLOBAL SEMESTA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],[
                'jenis_kas_id' => 2,
                
                'keterangan' => 'PT. BUANA GLOBAL SEMESTA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],[
                'jenis_kas_id' => 2,
                
                'keterangan' => 'PT. CAHAYA BUMI PERSADA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],[
                'jenis_kas_id' => 2,
                
                'keterangan' => 'PT. KEMBAR KENCANA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],[
                'jenis_kas_id' => 2,
                
                'keterangan' => 'PT. KEMBAR KENCANA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],[
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. KEMBAR KENCANA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ]
            ,[
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. KEMBAR KENCANA PUTRA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ]
            ,[
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. KEMBAR KENCANA PUTRA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ]
            ,[
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. KEMBAR KENCANA PUTRA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ]
            ,[
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. KEMBAR KENCANA PUTRA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ]
            ,[
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. KEMBAR KENCANA PUTRA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ]
            ,[
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. SEJAHTERA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ]
            ,[
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. SEJAHTERA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],[
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. BUANA GLOBAL SEMESTA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ]
            ,[
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. CAHAYA BUMI PERSADA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ]
            ,[
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. CAHAYA BUMI PERSADA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],[
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. TANGGAMUS BAROKAH BERSAMA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ]
            ,[
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. ARNATA ZEWIN SEJATI',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ]
            ,[
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. ARNATA ZEWIN SEJATI',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],[
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. LAMPUNG PESISIR GAS',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ]
            ,[
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. DINAR SENTAUSA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],[
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. DINAR SENTAUSA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],
            // =======================================================
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. BUANA GLOBAL SEMESTA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. KEMBAR KENCANA PUTRA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. KEMBAR KENCANA PUTRA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. KEMBAR KENCANA PUTRA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. KEMBAR KENCANA PUTRA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. KEMBAR KENCANA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. KEMBAR KENCANA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. EDWARD FARANI FAMILY',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. TANGGAMUS BAROKAH BERSAMA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. ARNATA ZEWIN SEJATI',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. ARNATA ZEWIN SEJATI',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. CAHAYA BUMI PERSADA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. CAHAYA BUMI PERSADA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. BUANA GLOBAL SEMESTA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. DINAR SENTAUSA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. DINAR SENTAUSA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. LAMPUNG PESISIR GAS',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. SEJAHTERA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. SEJAHTERA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. BUANA GLOBAL SEMESTA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],[
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. BUANA GLOBAL SEMESTA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],[
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. CAHAYA BUMI PERSADA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],[
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. KEMBAR KENCANA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],[
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. KEMBAR KENCANA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],[
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. KEMBAR KENCANA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ]
            ,[
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. KEMBAR KENCANA PUTRA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ]
            ,[
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. KEMBAR KENCANA PUTRA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ]
            ,[
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. KEMBAR KENCANA PUTRA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ]
            ,[
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. KEMBAR KENCANA PUTRA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ]
            ,[
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. KEMBAR KENCANA PUTRA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ]
            ,[
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. SEJAHTERA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ]
            ,[
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. SEJAHTERA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],[
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. BUANA GLOBAL SEMESTA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ]
            ,[
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. CAHAYA BUMI PERSADA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ]
            ,[
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. CAHAYA BUMI PERSADA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],[
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. TANGGAMUS BAROKAH BERSAMA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ]
            ,[
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. ARNATA ZEWIN SEJATI',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ]
            ,[
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. ARNATA ZEWIN SEJATI',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],[
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. LAMPUNG PESISIR GAS',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ]
            ,[
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. DINAR SENTAUSA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],[
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. DINAR SENTAUSA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
            ],
            // =======================================================
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. BUANA GLOBAL SEMESTA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. KEMBAR KENCANA PUTRA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. KEMBAR KENCANA PUTRA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. KEMBAR KENCANA PUTRA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. KEMBAR KENCANA PUTRA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. KEMBAR KENCANA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. KEMBAR KENCANA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. EDWARD FARANI FAMILY',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. TANGGAMUS BAROKAH BERSAMA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. ARNATA ZEWIN SEJATI',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. ARNATA ZEWIN SEJATI',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. CAHAYA BUMI PERSADA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. CAHAYA BUMI PERSADA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. BUANA GLOBAL SEMESTA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. DINAR SENTAUSA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. DINAR SENTAUSA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. LAMPUNG PESISIR GAS',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. SEJAHTERA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. SEJAHTERA',
                'total_masuk' => '33000',
                'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
            ],
            // =======================================================
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. BUANA GLOBAL SEMESTA',
                'total_masuk' => '33000',
                'tanggal' => '2023-06-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. KEMBAR KENCANA PUTRA',
                'total_masuk' => '33000',
                'tanggal' => '2023-06-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. KEMBAR KENCANA PUTRA',
                'total_masuk' => '33000',
                'tanggal' => '2023-06-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. KEMBAR KENCANA PUTRA',
                'total_masuk' => '33000',
                'tanggal' => '2023-06-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. KEMBAR KENCANA PUTRA',
                'total_masuk' => '33000',
                'tanggal' => '2023-06-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. KEMBAR KENCANA',
                'total_masuk' => '33000',
                'tanggal' => '2023-06-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. KEMBAR KENCANA',
                'total_masuk' => '33000',
                'tanggal' => '2023-06-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. EDWARD FARANI FAMILY',
                'total_masuk' => '33000',
                'tanggal' => '2023-06-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. TANGGAMUS BAROKAH BERSAMA',
                'total_masuk' => '33000',
                'tanggal' => '2023-06-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. ARNATA ZEWIN SEJATI',
                'total_masuk' => '33000',
                'tanggal' => '2023-06-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. ARNATA ZEWIN SEJATI',
                'total_masuk' => '33000',
                'tanggal' => '2023-06-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. CAHAYA BUMI PERSADA',
                'total_masuk' => '33000',
                'tanggal' => '2023-06-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. CAHAYA BUMI PERSADA',
                'total_masuk' => '33000',
                'tanggal' => '2023-06-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. BUANA GLOBAL SEMESTA',
                'total_masuk' => '33000',
                'tanggal' => '2023-06-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. DINAR SENTAUSA',
                'total_masuk' => '33000',
                'tanggal' => '2023-06-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. DINAR SENTAUSA',
                'total_masuk' => '33000',
                'tanggal' => '2023-06-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. LAMPUNG PESISIR GAS',
                'total_masuk' => '33000',
                'tanggal' => '2023-06-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. SEJAHTERA',
                'total_masuk' => '33000',
                'tanggal' => '2023-06-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. SEJAHTERA',
                'total_masuk' => '33000',
                'tanggal' => '2023-06-22',
                'created_at' => Carbon::now(),
            ],
            // =======================================================
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. BUANA GLOBAL SEMESTA',
                'total_masuk' => '33000',
                'tanggal' => '2023-07-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. KEMBAR KENCANA PUTRA',
                'total_masuk' => '33000',
                'tanggal' => '2023-07-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. KEMBAR KENCANA PUTRA',
                'total_masuk' => '33000',
                'tanggal' => '2023-07-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. KEMBAR KENCANA PUTRA',
                'total_masuk' => '33000',
                'tanggal' => '2023-07-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. KEMBAR KENCANA PUTRA',
                'total_masuk' => '33000',
                'tanggal' => '2023-07-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. KEMBAR KENCANA',
                'total_masuk' => '33000',
                'tanggal' => '2023-07-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. KEMBAR KENCANA',
                'total_masuk' => '33000',
                'tanggal' => '2023-07-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. EDWARD FARANI FAMILY',
                'total_masuk' => '33000',
                'tanggal' => '2023-07-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. TANGGAMUS BAROKAH BERSAMA',
                'total_masuk' => '33000',
                'tanggal' => '2023-07-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. ARNATA ZEWIN SEJATI',
                'total_masuk' => '33000',
                'tanggal' => '2023-07-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. ARNATA ZEWIN SEJATI',
                'total_masuk' => '33000',
                'tanggal' => '2023-07-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. CAHAYA BUMI PERSADA',
                'total_masuk' => '33000',
                'tanggal' => '2023-07-22',
                'created_at' => Carbon::now(),
            ],
            [
                'jenis_kas_id' => 2,
                'keterangan' => 'PT. CAHAYA BUMI PERSADA',
                'total_masuk' => '33000',
                'tanggal' => '2023-07-22',
                'created_at' => Carbon::now(),
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
                'created_at' => Carbon::now(),
        ],[
            'jenis_kas_id' => '1',
            'pembelian_id' => '2',
            'keterangan' => 'KOPI',
            'total_keluar' => '36000',
            'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
        ],[
            'jenis_kas_id' => '1',
            'pembelian_id' => '3',
            'keterangan' => 'NASI OPERATOR',
            'total_keluar' => '140000',
            'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
        ],[
            'jenis_kas_id' => '1',
            'pembelian_id' => '4',
            'keterangan' => 'POP MIE JUMAT',
            'total_keluar' => '110000',
            'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
        ],[
            'jenis_kas_id' => '1',
            'pembelian_id' => '5',
            'keterangan' => 'TEH',
            'total_keluar' => '7000',
            'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
        ],[
            'jenis_kas_id' => '1',
            'pembelian_id' => '6',
            'keterangan' => 'GALON REFIL',
            'total_keluar' => '30000',
            'tanggal' => '2023-05-17',
                'created_at' => Carbon::now(),
        ],
        // ===========================================
        [
            'jenis_kas_id' => '1',
            'pembelian_id' => '7',
            'keterangan' => 'GALON REFIL',
            'total_keluar' => '30000',
            'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
        ],
        [
            'jenis_kas_id' => '1',
            'pembelian_id' => '8',
            'keterangan' => 'CLING KACA',
            'total_keluar' => '12000',
            'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
        ],
        [
            'jenis_kas_id' => '1',
            'pembelian_id' => '9',
            'keterangan' => 'SABUN FILLING',
            'total_keluar' => '10000',
            'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
        ],
        [
            'jenis_kas_id' => '1',
            'pembelian_id' => '10',
            'keterangan' => 'WIPOL',
            'total_keluar' => '15000',
            'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
        ],
        [
            'jenis_kas_id' => '1',
            'pembelian_id' => '11',
            'keterangan' => 'GULA',
            'total_keluar' => '23000',
            'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
        ],
        [
            'jenis_kas_id' => '1',
            'pembelian_id' => '12',
            'keterangan' => 'KOPI',
            'total_keluar' => '20000',
            'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
        ],
        // =========================================
        [
            'jenis_kas_id' => '1',
            'pembelian_id' => '13',
            'keterangan' => 'WD GREEN SN350',
            'total_keluar' => '365000',
            'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
        ], 
        [
            'jenis_kas_id' => '1',
            'pembelian_id' => '14',
            'keterangan' => 'KINGSTON FURY BEAST DDR4',
            'total_keluar' => '340000',
            'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
        ], 
        [
            'jenis_kas_id' => '1',
            'pembelian_id' => '15',
            'keterangan' => 'M.2 SCREW',
            'total_keluar' => '10000',
            'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
        ], 
        [
            'jenis_kas_id' => '1',
            'pembelian_id' => '16',
            'keterangan' => 'BIAYA SERVICE',
            'total_keluar' => '50000',
            'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
        ], 
        [
            'jenis_kas_id' => '1',
            'pembelian_id' => '17',
            'keterangan' => 'BIAYA SERVICE',
            'total_keluar' => '50000',
            'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
        ], 
        [
            'jenis_kas_id' => '1',
            'pembelian_id' => '18',
            'keterangan' => 'CRUSIAL SO-DIMM DDR4 8Gb 3200MHz',
            'total_keluar' => '50000',
            'tanggal' => '2023-05-22',
                'created_at' => Carbon::now(),
        ], 
        // =========================================
        [
            'jenis_kas_id' => '1',
            'pembelian_id' => '13',
            'keterangan' => 'WD GREEN SN350',
            'total_keluar' => '365000',
            'tanggal' => '2023-06-22',
                'created_at' => Carbon::now(),
        ], 
        [
            'jenis_kas_id' => '1',
            'pembelian_id' => '14',
            'keterangan' => 'KINGSTON FURY BEAST DDR4',
            'total_keluar' => '340000',
            'tanggal' => '2023-06-22',
                'created_at' => Carbon::now(),
        ], 
        [
            'jenis_kas_id' => '1',
            'pembelian_id' => '15',
            'keterangan' => 'M.2 SCREW',
            'total_keluar' => '10000',
            'tanggal' => '2023-06-22',
                'created_at' => Carbon::now(),
        ], 
        [
            'jenis_kas_id' => '1',
            'pembelian_id' => '16',
            'keterangan' => 'BIAYA SERVICE',
            'total_keluar' => '50000',
            'tanggal' => '2023-06-22',
                'created_at' => Carbon::now(),
        ], 
        [
            'jenis_kas_id' => '1',
            'pembelian_id' => '17',
            'keterangan' => 'BIAYA SERVICE',
            'total_keluar' => '50000',
            'tanggal' => '2023-06-22',
                'created_at' => Carbon::now(),
        ], 
        [
            'jenis_kas_id' => '1',
            'pembelian_id' => '18',
            'keterangan' => 'CRUSIAL SO-DIMM DDR4 8Gb 3200MHz',
            'total_keluar' => '50000',
            'tanggal' => '2023-06-22',
                'created_at' => Carbon::now(),
        ], 
        // =========================================
        [
            'jenis_kas_id' => '1',
            'pembelian_id' => '13',
            'keterangan' => 'WD GREEN SN350',
            'total_keluar' => '365000',
            'tanggal' => '2023-07-22',
                'created_at' => Carbon::now(),
        ], 
        [
            'jenis_kas_id' => '1',
            'pembelian_id' => '14',
            'keterangan' => 'KINGSTON FURY BEAST DDR4',
            'total_keluar' => '340000',
            'tanggal' => '2023-07-22',
                'created_at' => Carbon::now(),
        ], 
        [
            'jenis_kas_id' => '1',
            'pembelian_id' => '15',
            'keterangan' => 'M.2 SCREW',
            'total_keluar' => '10000',
            'tanggal' => '2023-07-22',
                'created_at' => Carbon::now(),
        ], 
        [
            'jenis_kas_id' => '1',
            'pembelian_id' => '16',
            'keterangan' => 'BIAYA SERVICE',
            'total_keluar' => '50000',
            'tanggal' => '2023-07-22',
                'created_at' => Carbon::now(),
        ], 
        [
            'jenis_kas_id' => '1',
            'pembelian_id' => '17',
            'keterangan' => 'BIAYA SERVICE',
            'total_keluar' => '50000',
            'tanggal' => '2023-07-22',
                'created_at' => Carbon::now(),
        ], 
        [
            'jenis_kas_id' => '1',
            'pembelian_id' => '18',
            'keterangan' => 'CRUSIAL SO-DIMM DDR4 8Gb 3200MHz',
            'total_keluar' => '50000',
            'tanggal' => '2023-07-22',
                'created_at' => Carbon::now(),
        ], 
    ];
    $this->db->table('kas_keluar')->insertBatch($data_kaskeluar);
    
    
}


}
