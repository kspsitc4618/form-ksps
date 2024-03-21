<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPersonal extends Model
{
    protected $fillable = [
        'tgl', 'name', 'alamat', 'telp', 'email', 'lama_bekerja', 'last_education',
        'work_experiences_place1', 'work_experiences_tgl1', 'work_experiences_description1',
        'skill', 'languange', 'job_lists', 'job_group', 'certified', 'status', 'dokumen_cv'
    ];
}
