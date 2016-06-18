<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datamahasiswa extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'datamahasiswas';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nim', 'nama', 'fakultas', 'jurusan', 'alamat', 'email', 'telp', 'foto'];
}
