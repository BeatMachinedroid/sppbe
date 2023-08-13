<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KasMasuk extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kas_masuk' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'penjualan_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true,
            ],
            'jenis_kas_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'keterangan' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'total_masuk' => [
                'type' => 'INT',
                'constraint' => 20,
            ],
            'tanggal' => [
                'type' => 'date',
            ],
            'created_at' => [
                'type' => 'timestamp',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'timestamp',
                'null' => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id_kas_masuk');
        $this->forge->createTable('kas_masuk');
        $this->db->query('ALTER TABLE `kas_masuk` ADD CONSTRAINT `fk_penjualan_id` FOREIGN KEY (`penjualan_id`) REFERENCES `penjualan`(`id_penjualan`) ON DELETE CASCADE') ;
        $this->db->query('ALTER TABLE `kas_masuk` ADD CONSTRAINT `fk_jenis_kas_masuk_id` FOREIGN KEY (`jenis_kas_id`) REFERENCES `jenis_kas`(`id_jenis_kas`)' );
    
    }

    public function down()
    {
        $this->forge->dropTable('kas_masuk');
    }
}
