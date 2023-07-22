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
        
        $this->db->table('barang')->insert([
            'nama' => 'gas',
            'harga_jual' => '10000',
            'harga_beli' => '9000',
            'stok' => '30',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $data_kasmasuk = [
        [
            'jenis_kas' => 'debit',
            'keterangan' => 'null',
            'total_masuk' => '0',
            'created_at' => '2023-01-17 09:02:36',
        ],
        [
            'jenis_kas' => 'debit',
            'keterangan' => 'null',
            'total_masuk' => '0',
            'created_at' => '2023-02-17 09:02:36',
        ],
        [
            'jenis_kas' => 'debit',
            'keterangan' => 'null',
            'total_masuk' => '0',
            'created_at' => '2023-03-17 09:02:36',
        ],
        [
            'jenis_kas' => 'debit',
            'keterangan' => 'null',
            'total_masuk' => '0',
            'created_at' => '2023-04-17 09:02:36',
        ],
            [
            'jenis_kas' => 'debit',
            'keterangan' => 'PT. BUANA GLOBAL SEMESTA',
            'total_masuk' => '33000',
            'created_at' => '2023-05-17 09:02:36',
        ],[
            'jenis_kas' => 'debit',
            'keterangan' => 'PT. BUANA GLOBAL SEMESTA',
            'total_masuk' => '33000',
            'created_at' => '2023-05-17 09:02:36',
        ],[
            'jenis_kas' => 'debit',
            'keterangan' => 'PT. CAHAYA BUMI PERSADA',
            'total_masuk' => '33000',
            'created_at' => '2023-05-17 09:02:36',
        ],[
            'jenis_kas' => 'debit',
            'keterangan' => 'PT. KEMBAR KENCANA',
            'total_masuk' => '33000',
            'created_at' => '2023-05-17 09:02:36',
        ],[
            'jenis_kas' => 'debit',
            'keterangan' => 'PT. KEMBAR KENCANA',
            'total_masuk' => '33000',
            'created_at' => '2023-05-17 09:02:36',
        ],[
            'jenis_kas' => 'debit',
            'keterangan' => 'PT. KEMBAR KENCANA',
            'total_masuk' => '33000',
            'created_at' => '2023-05-17 09:02:36',
        ]
        ,[
            'jenis_kas' => 'debit',
            'keterangan' => 'PT. KEMBAR KENCANA PUTRA',
            'total_masuk' => '33000',
            'created_at' => '2023-05-17 09:02:36',
        ]
        ,[
            'jenis_kas' => 'debit',
            'keterangan' => 'PT. KEMBAR KENCANA PUTRA',
            'total_masuk' => '33000',
            'created_at' => '2023-05-17 09:02:36',
        ]
        ,[
            'jenis_kas' => 'debit',
            'keterangan' => 'PT. KEMBAR KENCANA PUTRA',
            'total_masuk' => '33000',
            'created_at' => '2023-05-17 09:02:36',
        ]
        ,[
            'jenis_kas' => 'debit',
            'keterangan' => 'PT. KEMBAR KENCANA PUTRA',
            'total_masuk' => '33000',
            'created_at' => '2023-05-17 09:02:36',
        ]
        ,[
            'jenis_kas' => 'debit',
            'keterangan' => 'PT. KEMBAR KENCANA PUTRA',
            'total_masuk' => '33000',
            'created_at' => '2023-05-17 09:02:36',
        ]
        ,[
            'jenis_kas' => 'debit',
            'keterangan' => 'PT. SEJAHTERA',
            'total_masuk' => '33000',
            'created_at' => '2023-05-17 09:02:36',
        ]
        ,[
            'jenis_kas' => 'debit',
            'keterangan' => 'PT. SEJAHTERA',
            'total_masuk' => '33000',
            'created_at' => '2023-05-17 09:02:36',
        ],[
            'jenis_kas' => 'debit',
            'keterangan' => 'PT. BUANA GLOBAL SEMESTA',
            'total_masuk' => '33000',
            'created_at' => '2023-05-17 09:02:36',
        ]
        ,[
            'jenis_kas' => 'debit',
            'keterangan' => 'PT. CAHAYA BUMI PERSADA',
            'total_masuk' => '33000',
            'created_at' => '2023-05-17 09:02:36',
        ]
        ,[
            'jenis_kas' => 'debit',
            'keterangan' => 'PT. CAHAYA BUMI PERSADA',
            'total_masuk' => '33000',
            'created_at' => '2023-05-17 09:02:36',
        ],[
            'jenis_kas' => 'debit',
            'keterangan' => 'PT. TANGGAMUS BAROKAH BERSAMA',
            'total_masuk' => '33000',
            'created_at' => '2023-05-17 09:02:36',
        ]
        ,[
            'jenis_kas' => 'debit',
            'keterangan' => 'PT. ARNATA ZEWIN SEJATI',
            'total_masuk' => '33000',
            'created_at' => '2023-05-17 09:02:36',
        ]
        ,[
            'jenis_kas' => 'debit',
            'keterangan' => 'PT. ARNATA ZEWIN SEJATI',
            'total_masuk' => '33000',
            'created_at' => '2023-05-17 09:02:36',
        ],[
            'jenis_kas' => 'debit',
            'keterangan' => 'PT. LAMPUNG PESISIR GAS',
            'total_masuk' => '33000',
            'created_at' => '2023-05-17 09:02:36',
        ]
        ,[
            'jenis_kas' => 'debit',
            'keterangan' => 'PT. DINAR SENTAUSA',
            'total_masuk' => '33000',
            'created_at' => '2023-05-17 09:02:36',
        ],[
            'jenis_kas' => 'debit',
            'keterangan' => 'PT. DINAR SENTAUSA',
            'total_masuk' => '33000',
            'created_at' => '2023-05-17 09:02:36',
        ],
        // =======================================================
        [
            'jenis_kas' => 'debit',
            'keterangan' => 'PT. BUANA GLOBAL SEMESTA',
            'total_masuk' => '33000',
            'created_at' => '2023-05-22 09:02:36',
        ],
        [
            'jenis_kas' => 'debit',
            'keterangan' => 'PT. KEMBAR KENCANA PUTRA',
            'total_masuk' => '33000',
            'created_at' => '2023-05-22 09:02:36',
        ],
        [
            'jenis_kas' => 'debit',
            'keterangan' => 'PT. KEMBAR KENCANA PUTRA',
            'total_masuk' => '33000',
            'created_at' => '2023-05-22 09:02:36',
        ],
        [
            'jenis_kas' => 'debit',
            'keterangan' => 'PT. KEMBAR KENCANA PUTRA',
            'total_masuk' => '33000',
            'created_at' => '2023-05-22 09:02:36',
        ],
        [
            'jenis_kas' => 'debit',
            'keterangan' => 'PT. KEMBAR KENCANA PUTRA',
            'total_masuk' => '33000',
            'created_at' => '2023-05-22 09:02:36',
        ],
        [
            'jenis_kas' => 'debit',
            'keterangan' => 'PT. KEMBAR KENCANA',
            'total_masuk' => '33000',
            'created_at' => '2023-05-22 09:02:36',
        ],
        [
            'jenis_kas' => 'debit',
            'keterangan' => 'PT. KEMBAR KENCANA',
            'total_masuk' => '33000',
            'created_at' => '2023-05-22 09:02:36',
        ],
        [
            'jenis_kas' => 'debit',
            'keterangan' => 'PT. EDWARD FARANI FAMILY',
            'total_masuk' => '33000',
            'created_at' => '2023-05-22 09:02:36',
        ],
        [
            'jenis_kas' => 'debit',
            'keterangan' => 'PT. TANGGAMUS BAROKAH BERSAMA',
            'total_masuk' => '33000',
            'created_at' => '2023-05-22 09:02:36',
        ],
        [
            'jenis_kas' => 'debit',
            'keterangan' => 'PT. ARNATA ZEWIN SEJATI',
            'total_masuk' => '33000',
            'created_at' => '2023-05-22 09:02:36',
        ],
        [
            'jenis_kas' => 'debit',
            'keterangan' => 'PT. ARNATA ZEWIN SEJATI',
            'total_masuk' => '33000',
            'created_at' => '2023-05-22 09:02:36',
        ],
        [
            'jenis_kas' => 'debit',
            'keterangan' => 'PT. CAHAYA BUMI PERSADA',
            'total_masuk' => '33000',
            'created_at' => '2023-05-22 09:02:36',
        ],
        [
            'jenis_kas' => 'debit',
            'keterangan' => 'PT. CAHAYA BUMI PERSADA',
            'total_masuk' => '33000',
            'created_at' => '2023-05-22 09:02:36',
        ],
        [
            'jenis_kas' => 'debit',
            'keterangan' => 'PT. BUANA GLOBAL SEMESTA',
            'total_masuk' => '33000',
            'created_at' => '2023-05-22 09:02:36',
        ],
        [
            'jenis_kas' => 'debit',
            'keterangan' => 'PT. DINAR SENTAUSA',
            'total_masuk' => '33000',
            'created_at' => '2023-05-22 09:02:36',
        ],
        [
            'jenis_kas' => 'debit',
            'keterangan' => 'PT. DINAR SENTAUSA',
            'total_masuk' => '33000',
            'created_at' => '2023-05-22 09:02:36',
        ],
        [
            'jenis_kas' => 'debit',
            'keterangan' => 'PT. LAMPUNG PESISIR GAS',
            'total_masuk' => '33000',
            'created_at' => '2023-05-22 09:02:36',
        ],
        [
            'jenis_kas' => 'debit',
            'keterangan' => 'PT. SEJAHTERA',
            'total_masuk' => '33000',
            'created_at' => '2023-05-22 09:02:36',
        ],
        [
            'jenis_kas' => 'debit',
            'keterangan' => 'PT. SEJAHTERA',
            'total_masuk' => '33000',
            'created_at' => '2023-05-22 09:02:36',
        ],
    ];

        $this->db->table('kas_masuk')->insertBatch($data_kasmasuk);

    $data_kaskeluar = [
        [
            'jenis_kas' => 'PENGELUARAN RUTIN',
            'keterangan' => 'null',
            'total' => '0',
            'created_at' => '2023-01-17 09:02:36',
        ],
        [
            'jenis_kas' => 'PENGELUARAN RUTIN',
            'keterangan' => 'null',
            'total' => '0',
            'created_at' => '2023-02-17 09:02:36',
        ],
        [
            'jenis_kas' => 'PENGELUARAN RUTIN',
            'keterangan' => 'null',
            'total' => '0',
            'created_at' => '2023-03-17 09:02:36',
        ],
        [
            'jenis_kas' => 'PENGELUARAN RUTIN',
            'keterangan' => 'null',
            'total' => '0',
            'created_at' => '2023-04-17 09:02:36',
        ],
        [
            'jenis_kas' => 'PENGELUARAN RUTIN',
            'keterangan' => 'GULA',
            'total' => '30000',
            'created_at' => '2023-05-17 09:02:36',
        ],[
            'jenis_kas' => 'PENGELUARAN RUTIN',
            'keterangan' => 'KOPI',
            'total' => '36000',
            'created_at' => '2023-05-17 09:02:36',
        ],[
            'jenis_kas' => 'PENGELUARAN NON RUTIN',
            'keterangan' => 'NASI OPERATOR',
            'total' => '140000',
            'created_at' => '2023-05-17 09:02:36',
        ],[
            'jenis_kas' => 'PENGELUARAN NON RUTIN',
            'keterangan' => 'POP MIE JUMAT',
            'total' => '110000',
            'created_at' => '2023-05-17 09:02:36',
        ],[
            'jenis_kas' => 'PENGELUARAN NON RUTIN',
            'keterangan' => 'TEH',
            'total' => '7000',
            'created_at' => '2023-05-17 09:02:36',
        ],[
            'jenis_kas' => 'PENGELUARAN NON RUTIN',
            'keterangan' => 'GALON REFIL',
            'total' => '30000',
            'created_at' => '2023-05-17 09:02:36',
        ],
        // ===========================================
        [
            'jenis_kas' => 'PENGELUARAN NON RUTIN',
            'keterangan' => 'GALON REFIL',
            'total' => '30000',
            'created_at' => '2023-05-22 09:02:36',
        ],
        [
            'jenis_kas' => 'PENGELUARAN NON RUTIN',
            'keterangan' => 'CLING KACA',
            'total' => '12000',
            'created_at' => '2023-05-22 09:02:36',
        ],
        [
            'jenis_kas' => 'PENGELUARAN NON RUTIN',
            'keterangan' => 'SABUN FILLING',
            'total' => '10000',
            'created_at' => '2023-05-22 09:02:36',
        ],
        [
            'jenis_kas' => 'PENGELUARAN NON RUTIN',
            'keterangan' => 'WIPOL',
            'total' => '15000',
            'created_at' => '2023-05-22 09:02:36',
        ],
        [
            'jenis_kas' => 'PENGELUARAN RUTIN',
            'keterangan' => 'GULA',
            'total' => '23000',
            'created_at' => '2023-05-22 09:02:36',
        ],
        [
            'jenis_kas' => 'PENGELUARAN RUTIN',
            'keterangan' => 'KOPI',
            'total' => '20000',
            'created_at' => '2023-05-22 09:02:36',
        ],
        // =========================================
        [
            'jenis_kas' => 'PENGELUARAN NON RUTIN',
            'keterangan' => 'WD GREEN SN350',
            'total' => '365000',
            'created_at' => '2023-05-20 09:02:36',
        ], 
        [
            'jenis_kas' => 'PENGELUARAN NON RUTIN',
            'keterangan' => 'KINGSTON FURY BEAST DDR4',
            'total' => '340000',
            'created_at' => '2023-05-20 09:02:36',
        ], 
        [
            'jenis_kas' => 'PENGELUARAN NON RUTIN',
            'keterangan' => 'M.2 SCREW',
            'total' => '10000',
            'created_at' => '2023-05-20 09:02:36',
        ], 
        [
            'jenis_kas' => 'PENGELUARAN NON RUTIN',
            'keterangan' => 'BIAYA SERVICE',
            'total' => '50000',
            'created_at' => '2023-05-20 09:02:36',
        ], 
        [
            'jenis_kas' => 'PENGELUARAN NON RUTIN',
            'keterangan' => 'BIAYA SERVICE',
            'total' => '50000',
            'created_at' => '2023-05-20 09:02:36',
        ], 
        [
            'jenis_kas' => 'PENGELUARAN NON RUTIN',
            'keterangan' => 'CRUSIAL SO-DIMM DDR4 8Gb 3200MHz',
            'total' => '50000',
            'created_at' => '2023-05-20 09:02:36',
        ], 
    ];
    $this->db->table('kas_keluar')->insertBatch($data_kaskeluar);

    }
}
