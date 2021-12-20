<?php

namespace App\Http\Controllers;
use App\Models\assetdatamodel;
use Illuminate\Http\Request;
use App\Models\assettypemodel;
use App\Models\assetimage;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\FuncCall;

class asertdata extends Controller
{
    function addasetitem()
    {
        $data=assettypemodel::all();
        return view('Data.addassetitem',compact('data'));
    }


    public function insertasetdatas(Request $req)
    {
        
        $valid=$req->validate([
            'name'=>'required|min:3|max:20',
            'typeid'=>'required',
             'unicode'=>'unique:assetdatamodels',
           
            // 'image.*' => 'mimes:jpeg,jpg,png,gif|max:3072'
        ]);

        if($valid)
        {
            
            if($req->hasfile('image'))
            {
                $data=new assetdatamodel();

                $temp2=assettypemodel::where('id',$req->typeid)->first()->type;
                
    

                $data->name=$req->name;
                $data->unicode=$req->unicode;
                $data->typename=$temp2;                    
                $data->status="1";
                $data->typeid=$req->typeid;
                $data->save();

                $kk=$data->id;
                foreach($req->file('image') as $file)
                {
                    $dimg= new assetimage();
                    $dimg->dataid=$kk;
                    $name = $file->getClientOriginalName();
                    $titlee=$name.rand();
                    $file->move(public_path().'/uploads/', $titlee);  
                    $dimg->images=$titlee;
                    $dimg->save();
                    // $imgData[] = $name;  
                }
            }
        }
        else
        {
            return "NOPEE";
        }
        return back()->with("success","Your Data is saved ");

    }
// Add Cpde Done


    public function showassetdata()
    {
        $data=assetdatamodel::all();
        return view("data.showcategory",compact('data'));
    }


    public function assetdelete($id)
    {
        $data=assetdatamodel::where('tid',$id)->delete();
        return redirect('/showassetdata');
    }

    public function assetedit($id)
    {
        $drop=assettypemodel::all();
        $data=assetdatamodel::where('tid',$id)->first();

        return view('data.updateitemasset',compact('data','drop'));
    }


    public function updateasset($id,Request $req)
    {
        $valid=$req->validate([
            'name'=>'required|min:3|max:20',
            'typeid'=>'required',
        ]);

        
       if($valid)
       {
           
        $data=assetdatamodel::where('tid',$id)->update([
            'name'=>$req->name,
            'typeid'=>$req->typeid,
            'typename'=> assettypemodel::where('id',$req->typeid)->first()->type
        ]);
       }
        return redirect('/showassetdata');
    }



    public function showimage($id)
    {
        $drop=assetdatamodel::where('tid',$id)->first();
            $data=assetimage::all()->where('dataid',$id);
        return view('data.showimage',compact('data','drop'));
    }



    public function graphshow()
    {
        return view('data.graph');
    }


    public function status($id,$cd)
    {
        $pp=0;
        if($id==0)
        {
            $pp=1;
        }

        $drop=assetdatamodel::where('tid',$cd)->update([
            'status'=>$pp
        ]);
        return redirect('/showassetdata');
    }



    public function graphdata()
    {
        $result = DB::select(DB::raw("select typeid as total,count('typeid')as count from assetdatamodels group by typeid"));
        
        $chartData="";
        foreach($result as $list){
            $name=assettypemodel::where('id',$list->total)->first()->type;
            $chartData.="['".$name."',     ".$list->count."],";
         
        }
       $arr['chartData'] = rtrim($chartData,",");
    //    return view('data.graph',$arr);

       $result2 = DB::select(DB::raw("select status as total,count('status')as count from assetdatamodels group by status"));
        
       $chartData="";
       foreach($result2 as $list){
           $name=$list->total==1?"Active":"In-Active";
           $chartData.="['".$name."',     ".$list->count."],";
        
       }
      $arr['chartData2'] = rtrim($chartData,",");



       return view('data.graph',$arr);
       
    }



    function changepassword()
    {
        return view("data.changepass");
    }

    function donepassword(Request $req,$id)
    {
        $valid=$req->validate([
            'oldpass'=>'required|min:8',
            'newpass'=>'required|min:8',
            'confim'=>'required|min:8|same:newpass'
        ]);

        if($valid)
        {
            $data=User::all()->where('id',$id)->first();
            if (Hash::check($req->oldpass,$data->password))
            {
                $data=User::where('id',$id)->update([
                    'password'=>Hash::make($req->newpass)
                ]);
                if($data)
                {
                    return back()->with("success","Password Successfully Changed");
                }
            }
            else
            {
                return back()->with('error',"Old password Not matched");
            }
        }
    }

    function changeimage()
    {
        return view("data.changeimage");
    }


    function doneimage($id,Request $req)
    {
        $valid=$req->validate([
            'image'=>'required|mimes:jpg,png,jpeg,gif'
        ]);

        if($valid)
        {
            $name =  rand().$req->image->getClientOriginalName();
            // return $name;
            $req->image->move(public_path().'/priyanshu/', $name); 

            $dd=User::where('id',$id)->first();

           
              unlink($dd->image);
                

            $data=User::where('id',$id)->update([
                'image'=>'priyanshu/'.$name
            ]);
            if($data)
            {
                return redirect('changeimage');
            }

        }

        
    }

}
