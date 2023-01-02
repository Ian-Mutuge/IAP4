<!DOCTYPE html>
<html>
<head>
    <style>


p{
    margin-left: 500px;
}


</style>
<title>Your profile</title>
</head>
<body>
<x-app-layout>
 <div>
<h1>Student Profile</h1>   <br>

                   
              
<p>Student No:  {{ Auth::user()->id }} </p>
<p>Student name: {{ Auth::user()->name }}</p>
<p>Mobile Phone No: {{ Auth::user()->phonenumber }}</p>
<p>Email address: {{ Auth::user()->email }}</p>
<p>Course_id:{{ Auth::user()->course_id }}</p>
<p>Course_name:{{ Auth::user()->course_name }}</p>

 </div>
</x-app-layout>
</body>
</html>
