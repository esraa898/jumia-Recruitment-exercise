<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $appends=['CountryCode','CountryName','State'];


    public function getCountryCodeAttribute(){

        return substr($this->phone, 1,3);
    }

    public function getCountryNameAttribute(){
        return getCountryByCode($this->countryCode);
    }

    public function getStateAttribute(){
        return  checkStateNumber($this->phone,$this->countryCode);
    }
}
