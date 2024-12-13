<?php

namespace Woenel\Prpcmblmts;

use Woenel\Prpcmblmts\Models\PhilippineBarangay;
use Woenel\Prpcmblmts\Models\PhilippineCity;
use Woenel\Prpcmblmts\Models\PhilippineProvince;
use Woenel\Prpcmblmts\Models\PhilippineRegion;

class Philippines
{
    private $philippine_region;
    private $philippine_province;
    private $philippine_city;
    private $philippine_barangay;

    public function __construct()
    {
        $this->philippine_region = new PhilippineRegion;
        $this->philippine_province = new PhilippineProvince;
        $this->philippine_city = new PhilippineCity;
        $this->philippine_barangay = new PhilippineBarangay;
    }

    public function regions()
    {
        return $this->philippine_region->query();
    }

    public function provinces()
    {
        return $this->philippine_province->query();
    }

    public function cities()
    {
        return $this->philippine_city->query();
    }

    public function barangays()
    {
        return $this->philippine_barangay->query();
    }
}
