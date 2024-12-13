<?php

namespace Woenel\Prpcmblmts\Models;

use Illuminate\Database\Eloquent\Model;

class PhilippineProvince extends Model
{
    protected $table = 'philippine_provinces';

    protected $fillable = [
        'name',
        'code',
        'psgc_code',
        'region_code'
    ];

    public function region()
    {
        return $this->belongsTo(PhilippineRegion::class, 'region_code', 'code');
    }

    public function cities()
    {
        return $this->hasMany(PhilippineCity::class, 'province_code', 'code');
    }
}
