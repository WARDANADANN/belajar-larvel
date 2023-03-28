<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Request;



class usercontroller extends Controller
{
    public function hallo(){
        $data= DB::select('SELECT * FROM student');
        return view('home',['mhs'=>$data]);
    }
    public function insert(Request $data){
        $id=$data->input('student_id');
        $name=$data->input('name');
        $dept_name=$data->input('dept_name');
        $tot_cred=$data->input('tot_cred');
        DB::insert('insert into student (student_id, name,dept_name,tot_cred) values (?,?,?,?)', array($id,$name,$dept_name,$tot_cred));
        return redirect('/test');
    }
    public function delete(Request $data){
        $id=$data->input('student_id');
        DB::delete("delete from users where student_id=$id");
    }

}
