<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class ApplicationController extends Controller
{
    public function index(){
        // dd("ok");
        // dd(Auth::user()->name);
        return view("admin.index");
        // dd("ok");
    }

    public function applications($id){
        try {
            $decrypted = Crypt::decrypt($id);
        } catch (\Exception $e) {
           dd($id);
        }
        $application = Application::where('application_type',$decrypted)->get();
        return view("admin.application-list",compact("application","decrypted"));
        // dd($Application);
    }

    public function viewApplication($id){
        try {
            $decrypted = Crypt::decrypt($id);
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->with('error','somthing went wrong');
        }
        $application = Application::where('id',$decrypted)->first();
        return view('admin.show',compact('application','decrypted'));
    }

    public function changeStatus($id){
        try {
            $decrypted = Crypt::decrypt($id);
        } catch (\Exception $e) {
            dd("ok");
        }
        $application=Application::where('id',$decrypted)->first();
        $application->update(['application_status'=>'viewed']);
        return redirect()->route('applications',Crypt::encrypt($application->application_type))->with('success','Successfully Changed');
    }
}
