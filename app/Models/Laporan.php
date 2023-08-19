<?php

namespace App\Models;

use CodeIgniter\Model;
use Carbon\Carbon;

class Laporan extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'laporan';
    protected $primaryKey       = 'id_laporan';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['kas_masuk_id','kas_keluar_id','tanggal','keterangan','created_at','updated_at'];

    // Dates
    protected $useTimestamps = false;
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

    public function masuk()
    {
        return $this->select()->join('kas_masuk','kas_masuk.id_kas_masuk = laporan.kas_masuk_id')->findAll();
    }
    
    public function keluar()
    {
        return $this->select()->join('kas_keluar','kas_keluar.id_kas_keluar = laporan.kas_keluar_id')->findAll();
    }
}
