<?php

namespace Woenel\Prpcmblmts\Models;

use Illuminate\Database\Eloquent\Model;

class PhilippineBarangay extends Model
{
    protected $table = 'philippine_barangays';

    protected $fillable = [
        'name',
        'psgc_code',
        'city_code',
        'province_code',
        'region_code'
    ];

    public function city()
    {
        return $this->belongsTo(PhilippineCity::class, 'city_code', 'code');
    }
}
