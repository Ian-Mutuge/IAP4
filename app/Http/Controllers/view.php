<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\marks;
use App\Models\course;
use App\Models\available;
use DB;

class view extends Controller
{
    //
public function views(){
$data=marks::all();
       return view('progress',['marks'=>$data]);
}
public function viewsChanger(){
$data=marks::all();
       return view('progresschanger',['marks'=>$data]);
}
public function edit_function($id){
$data=marks::find($id);
return view('progresseditor',['data'=>$data]);
}
public function update_function(Request $req){
$data=marks::find($req->id);
$data->academicyear=$req->academicyear;
$data->syllabus=$req->syllabus;
$data->year=$req->year;
$data->subjectcode=$req->subjectcode;
$data->subjectname=$req->subjectname;
$data->marks=$req->marks;
$data->grade=$req->grade;
$data->credits=$req->credits;
$data->gpv=$req->gpv;
$data->save();
return redirect('progresschanger');
}
public function delete_function($id){
$data=marks::find($id);
$data->delete();
return redirect('progresschanger');
}
public function courseview(){
$data=course::all();
return view('courses',['courses'=>$data]);
}
public function select_function($id){
$data=available::find($id);
return view('acceptcourse',['course'=>$data]);
}
public function choosecourseview(){
$data=available::all();
return view('choosecourse',['courses'=>$data]);
}
public function add_function(Request $request){
$data=new course;
$data->subjectcode=$request->subjectcode;
$data->name=$request->name;
$data->year=$request->year;
$data->semester=$request->semester;
$data->status=$request->status;
$data->save();
return redirect('courses');
}
}
?>
