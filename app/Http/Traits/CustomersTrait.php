<?php

namespace App\Http\Traits;

trait CustomersTrait{

private function FilterWithCountryCode($collection,$countryCode){
 return $collection->filter(function($item) use($countryCode){
 if($item->countrycode == $countryCode){
     return $item;
 }


 })->values();

 
}

public function FilterWithState($collection,$state){

return $collection->filter(function($item) use($state){


if($item->state == $state){
    return $item;
}


})->values();

}




}

