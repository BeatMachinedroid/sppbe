<?php

namespace App\Models;

use CodeIgniter\Model;

class KasMasuk extends Model
{
    
    protected $DBGroup          = 'default';
    protected $table            = 'kas_masuk';
    protected $primaryKey       = 'id_kas_masuk';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['penjualan_id','keterangan', 'jenis_kas_id', 'total_masuk','tanggal','created_at', 'updated_at'];

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

    
    public function penjualan()
    {
        return $this->select()->join('jenis_kas','jenis_kas.id_jenis_kas = kas_masuk.jenis_kas_id')->paginate(5, 'masuk');
    }
}
