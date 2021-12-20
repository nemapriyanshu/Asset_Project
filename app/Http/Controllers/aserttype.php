<?php

namespace App\Http\Controllers;
use App\Models\assettypemodel;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

// -----------------------------------------TYPE MODELLLL---------------------------

class aserttype extends Controller
{
    public function addasert()
    {
        return view('data.addasert');
    }

    public function insertdata(Request $req)
    {
        $valid = $req->validate([
            'type'=>'required|min:3|max:30|unique:assettypemodels',
            'description'=>'required|min:5|max:500'
        ]);
        if($valid)
        {            
            $data=new assettypemodel();
            $data->type=$req->type;
            $data->description=$req->description;
            $data->save();
            return back()->with("success","Your Asset Type is added");
        }
      
        // return redirect('/addasert');
    }


    public function showdata()
    {
        $data=assettypemodel::all();
        return view('data.showassert',compact("data"));
    }

    
    public function delete($id)
    {
        $data=assettypemodel::where('id',$id)->delete();
        return redirect('showasset');
    }

    public function edit($id=null)
    {
        $data=assettypemodel::where('id',$id)->first();
        return view('data.updateasert',compact('data'));
    }


    public function updatedata($id,Request $req)
    {
        $valid = $req->validate([
            'type'=>'required|min:3|max:30',
            'description'=>'required|min:5|max:500'
        ]);
        if($valid)
        {            
            $data=assettypemodel::where('id',$id)->update([
                'type'=>$req->type,
                'description'=>$req->description        
            ]);
        }

      
        
            return redirect('showasset');
    }
}
