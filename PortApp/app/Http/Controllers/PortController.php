<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Port;

class PortController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function store(Request $request)
    {
        $valid = $request->validate([
            'port_number'=> 'required'
        ]);

        Port::create([
            'port_number' => $valid['port_number']
        ]);
        return redirect()->route('ports.portsView')->with('success','Port Added Successfully');
    }
    public function read()
    {
        $data = Port::all();
        return view('ports.portsView',get_defined_vars());
    }
    public function deletePort($id)
    {
        $data =Port::find($id);
        if($data){
            $data->delete();
        }
        else{
            return abort(404);
        }
        return redirect()->route('ports.portsView')->with('succes','Port Deleted Successfully');
    }
    public function togggleStatus(Port $port)
    {
        $port->status = !$post->status;
        $port->save();
        return redirect()->back();
    }

}
