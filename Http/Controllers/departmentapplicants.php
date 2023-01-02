<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departmentsapplicants;


class departmentapplicantsController extends Controller
{ 
  
  public function store(Request $req) {

   $depapplicant = new departmentapplicant();
   

   $depapplicant->fname = $req->fname;
   $depapplicant->lname = $req->lname;
   $depapplicant->dob = $req->dob;
   $depapplicant->email = $req->email;
   $depapplicant->phone = $req->pnumber;
   $depapplicant->gender = $req->gender;
   $depapplicant->department = $req->dep;
   

   $depapplicant->save();

      return redirect('/');

    }
    //
}