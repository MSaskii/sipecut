<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelolaCuti extends Model
{
    protected $table = 'kelola_cuti';
    protected $guarded = ['id'];

    public function getBerkas($id)
    {
        return KelolaCuti::where('ajukan_cuti_id',$id)->pluck('unggah')->first();
    }
}
