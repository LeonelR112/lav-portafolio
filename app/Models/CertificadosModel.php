<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CertificadosModel extends Model
{
    protected $table = 'certificados';
    protected $primaryKey = 'id_cert';
    public $timestamps = false;
}
