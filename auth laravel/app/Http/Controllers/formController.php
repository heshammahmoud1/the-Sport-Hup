<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Http\Requests\Man;
use Illuminate\Support\Facades\Storage;



class formController extends Controller
{
public function index(){
return view("welcome");
}

public function insert(Man $request) {

    if ($request->hasFile('image')) {
   
        $data = $request->file('image')->getClientOriginalName();
       
        $image = $request->file('image')->storeAs('makes', $data);
    } else {

        $image = null;
    }
   

    DB::table('employees')->insert([
        'fname' => $request->fname,
        'lname' => $request->lname,
        'email' => $request->email,
        'image' => $image,
        'gender' => $request->gender,
        'dp_id' => $request->dno
    ]);
    

    return redirect()->route('insert')->with('msg', 'تمت الإضافة بنجاح');
}


    public function show(){
        $show = DB::table('_department')->get()->all();
        return view("welcome",compact('show'));
    }

    public function show_data(){
        
        $data = DB::table('employees')->get(); 
    
        return view('justview', compact('data'));
    }


    
    public function up($id){
       $tt =  DB::table("employees")->get()->where('id',$id);
       return view('update',compact('tt'));
    }
    public function up2(){
        $tt =  DB::table("employees")->get()->all();
        return view('dashboard',compact('tt'));
     }
    
     public function delete_fun(Request $request, $id)
     {
         // جلب مسار الصورة من قاعدة البيانات بناءً على المعرف
         $employee = DB::table('employees')->where('id', $id)->first();
     
         if ($employee && !empty($employee->image) && Storage::exists($employee->image)) {
             Storage::delete($employee->image);
             if(empty(storage::files('makes'))){
                 storage::deleteDirectory('makes');
             }
         } 
         
         DB::table('employees')->where('id', $id)->delete();
     
      
         return redirect()->route('show_data')->with('msg', 'Deleted Done');
     }

         public function down(Request $request, $id) {
           
            DB::table('employees')->where('id', $id)->update([
                'fname' => $request->fname,
                'lname' => $request->lname,
                'email' => $request->email,
                'dp_id' => $request->dp_id
            ]);

            return redirect()->route('show_data')->with('msg', 'Update Done');
        }
        
        

    }

