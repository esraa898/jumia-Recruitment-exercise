<?php

use Illuminate\Pagination\LengthAwarePaginator;

if (!function_exists('paginateData')){

    function paginateData($collection ,$perpage =10){

   $currentpage= request('page');

   $currentpageresult = $collection->slice(($currentpage -1)*$perpage,$perpage)->all();

   return new LengthAwarePaginator($currentpageresult,count($collection),$perpage,$currentpage,['path'=>request()->url(),'query'=>request()->query()]);

    }
}