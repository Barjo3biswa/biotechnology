<?php

use App\Models\Application;

function asset_public($path, $secure = null)
{
    return asset("public/" . $path, $secure);
}

function getDashboardCount($id,$status){
    // dd($status);
    $count = Application::where('application_type',$id);
    if($status=="viewed"){
        $count=$count->where("application_status","viewed");
    }
    $count=$count->count();
    return $count;
}

