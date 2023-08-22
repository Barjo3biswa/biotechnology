<?php

namespace App\Http\Controllers\form;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class annexureController extends Controller
{

    public function index()
    {
        return view('website.form');
    }

    public function viewApplication($id){
        try {
            $decrypted = Crypt::decrypt($id);
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->with('error','somthing went wrong');
        }
        $application = Application::where('id',$decrypted)->first();
        return view('show-form.show',compact('application'));
    }
}
