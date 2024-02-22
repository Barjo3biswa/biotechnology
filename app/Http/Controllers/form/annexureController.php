<?php

namespace App\Http\Controllers\form;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class annexureController extends Controller
{

    public function index(Request $request)
    {
        try{
            $type = Crypt::decrypt($request->application_type);
            return view('website.form',compact('type'));
        }catch(\Exception $e){
            return redirect()->route('home-page');
            // dd("successfull");
        }
        // dd($request->all());

    }

    public function viewApplication($id){
        // dd("ok");
        try {
            $decrypted = Crypt::decrypt($id);
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->with('error','somthing went wrong');
        }
        $application = Application::where('id',$decrypted)->first();
        // dd("ok");
        return view('show-form.show',compact('application'));
    }
}
