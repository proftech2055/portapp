<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Port;
use App\Models\Service;

class ServiceController extends Controller
{
    public function addPort()
    {
        $data = Port::all();
        return view('service.addNew',compact('data'));
    }

    public function addService(Request $request)
    {
        $valid = $request->validate([
            "serviceName"=> 'required',
            "path" => 'required',
            "port" => 'required'
        ]);
        Service::create([
            'serviceName' => $valid['serviceName'],
            'path' => $valid['path'],
            'port' => $valid['port']
        ]);
        return redirect()->route('service.addNew')->with('success','Service Added Successfully');
    }

    public function viewAllService()
    {
        $valid = Service::all();
        return view('service.viewAll',compact('valid'));
    }
    public function edit(string $id)
    {
        $data = Service::find($id);
        if(!$data)
        return abort(404);
        return view('service.edit',['data'=>$data]);
    }
    public function update(Request $request, string $id)
    {
        $data = Service::findorFail($id);
        $data->update($request->all());
        return redirect()->route('service.viewAll',['id'=>$data->id])->with('success','Service Record Updated Successfully');
    }
    public function delete(string $id)
    {
        $data = Service::find($id);
        if($data){
            $data->delete();
        }
        else{
            return abort(404);
        }
        return redirect()->route('service.viewAll')->with('success','Service Record Deleted Successfully');

    }
 

}
