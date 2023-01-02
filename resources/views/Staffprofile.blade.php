<!DOCTYPE html>
<html>
<head>
    
<title>Your profile</title>
</head>
<body>

<h1>Staff Profile</h1>   

                   
              
<p>Staff No:  {{ Auth::user()->id }} </p>
<p>Staff name: {{ Auth::user()->name }}</p>
<p>Mobile Phone No: {{ Auth::user()->phonenumber }}</p>
<p>Email address: {{ Auth::user()->email }}</p>



</body>
</html>
