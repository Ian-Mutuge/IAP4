<html> 
    <head>
        <title>Department Registration</title>
        <link rel="stylesheet" href="/css/main.css">
</head>

<body> 
    <div class="main">
        <div class="apply">

        <h2>Register Department</h2>
        <form action="applydepartment" method="post">
            @csrf
            <label>First Name : </label>
            <br>
            <input type="text" name="fname" id="name" placeholder="First Name">
            <br> <br>
            
            <label>Last Name : </label>
            <br>
            <input type="text" name="lname" id="name" placeholder="Last Name">
            <br> <br>

            <label>Date Of Birth: </label>
            <br>
            <input type="text" name="dob" id="name" placeholder="Date Of Birth">
            <br> <br>

            <label>Email : </label>
            <br>
            <input type="email" name="email" id="mail" placeholder="Valid Email">
            <br> <br>
            
            <label> Phone Number : </label>
            <br>
            <input type="number" name="pnumber" id="phone" placeholder="Phone Number"
>               <br> <br>

            <label>Gender : </label>
            <br>
            <input type="radio" name="gender" id="male">
            &nbsp;
            <span id="male">Male</span>
            &nbsp; &nbsp; &nbsp; &nbsp;
            
            <input type="radio" name="gender" id="female"> 
            &nbsp;
            <span id="female">Female</span>
            <br> <br>     
            
            <label>What Department do you want to register for? </label>
            <br> <br>

            <input type="radio" name="dep" id="male">
            &nbsp;
            <span id="male">Finance</span>
            &nbsp; &nbsp; &nbsp; &nbsp;
            
            <input type="radio" name="dep" id="female"> 
            &nbsp;
            <span id="female">IT</span>
            <br> <br>
            
            <input type="radio" name="dep" id="female"> 
            &nbsp;
            <span id="female">Teaching</span>
            &nbsp; &nbsp; &nbsp; &nbsp;

            <input type="radio" name="dep" id="female"> 
            &nbsp;
            <span id="female">Medical</span>
            <br> <br>

            <input type="radio" name="dep" id="female"> 
            &nbsp;
            <span id="female">Admissions</span>
            &nbsp; &nbsp; &nbsp; &nbsp;
               
            <input type="radio" name="dep" id="female"> 
            &nbsp;
            <span id="female">Sports</span>
            <br> <br>

            <input type="radio" name="dep" id="female"> 
            &nbsp;
            <span id="female">Library</span>
            <br> <br>
               <input type="submit" value="Submit">
</form>
</body>


