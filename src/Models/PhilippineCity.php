<?php

namespace Woenel\Prpcmblmts\Models;

use Illuminate\Database\Eloquent\Model;

class PhilippineCity extends Model
{
    protected $table = 'philippine_cities';

    protected $fillable = [
        'name',
        'code',
        'psgc_code',
        'province_code',
        'region_code'
    ];

    public function province()
    {
        return $this->belongsTo(PhilippineProvince::class, 'province_code', 'code');
    }

    public function barangays()
    {
        return $this->hasMany(PhilippineBarangay::class, 'city_code', 'code');
    }
}
