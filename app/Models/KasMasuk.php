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
    protected $allowedFields    = ['id_kas_masuk', 'user_id','penjualan_id', 'jenis_kas', 'keterangan', 'total_masuk','created_at', 'updated_at'];

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

    public function user()
    {
        return $this->select()->join('users', 'users.id_user = kas_masuk.user_id')->paginate(5, 'masuk');
    }
}
