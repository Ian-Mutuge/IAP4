<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\applicants;

class ApplicantController extends Controller
{ 
  
  public function store(Request $req) {

   $applicant = new applicants();
   

   $applicant->fname = $req->fname;
   $applicant->lname = $req->lname;
   $applicant->dob = $req->dob;
   $applicant->email = $req->email;
   $applicant->phone = $req->pnumber;
   $applicant->gender = $req->gender;
   $applicant->firstlanguage = $req->lang;
   $applicant->nationality = $req->cob;
   $applicant->address = $req->add;
   $applicant->highschool = $req->secsch;
   $applicant->schooladdress = $req->schadd;
   $applicant->gradyear = $req->dog;
   $applicant->kcsegrase = $req->grade;
   $applicant->medical = $req->cond;
   $applicant->othercondition = $req->other;

   $applicant->save();

      return redirect('/');

    }

    public function show() {

      return applicants::all();
      
      

    }


}
