<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table        = 'tbl_kategori';
    protected $primaryKey   = 'id_kategori';
    
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['nama_kategori'];
}