<?php

namespace App\Models;

use CodeIgniter\Model;

class KasKeluar extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'kas_keluar';
    protected $primaryKey       = 'id_kas_keluar';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['jenis_kas_id','pembelian_id', 'keterangan', 'total_keluar','tanggal','created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function pembelian()
    {
        return $this->select()->join('jenis_kas', 'jenis_kas.id_jenis_kas = kas_keluar.jenis_kas_id')->paginate(10, 'keluar');
    }

    // public function jenis(){
    //     return $this->select()->join('jenis_kas', 'jenis_kas.id_jenis_kas = kas_keluar.jenis_kas_id')->paginate(5, 'keluar');
    // }
}