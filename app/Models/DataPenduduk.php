<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataPenduduk extends Model
{
    public $table = 'data_penduduks';

    protected $fillable = ['nik', 'nama'];

    public function sql()
    {
        return $this
            ->select(
                $this->table . '.id',
                $this->table . '.nama',
                $this->table . '.nik',
                $this->table . '.no_kk',
                $this->table . '.tempat_lahir',
                $this->table . '.tanggal_lahir',
                $this->table . '.alamat',
                $this->table . '.pekerjaan'
            )->orderBy(
                $this->table . '.id'
            );
    }
}

