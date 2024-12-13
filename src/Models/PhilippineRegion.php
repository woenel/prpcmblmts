<?php

namespace Woenel\Prpcmblmts\Models;

use Illuminate\Database\Eloquent\Model;

class PhilippineRegion extends Model
{
    protected $table = 'philippine_regions';

    protected $fillable = [
        'name',
        'code',
        'psgc_code'
    ];

    public function provinces()
    {
        return $this->hasMany(PhilippineProvince::class, 'region_code', 'code');
    }
}
