
<html> 
    <head>
        <title>Student Application Form</title>
        <link rel="stylesheet" href="/css/main.css">
</head>

<body> 
    <div class="main">
        <div class="apply">
            <h1>Student Application Form</h1>
<br>
        <h2>Personal Information</h2>

        <form action="application" method="post">
            @csrf
            <label>First Name  </label>
            <br> <br>
            <input type="text" name="fname" id="name" placeholder="First Name">
            <br> <br>
            
            <label>Last Name  </label>
            <br> <br>
            <input type="text" name="lname" id="name" placeholder="Last Name">
            <br> <br>

            <label>Date Of Birth  </label>
            <br> <br>
            <input type="text" name="dob" id="name" placeholder="Date Of Birth">
            <br> <br>

            <label>Email  </label>
            <br> <br>
            <input type="email" name="email" id="mail" placeholder="Valid Email">
            <br> <br>
            
            <label> Phone Number  </label>
            <br> <br>
            <input type="number" name="pnumber" id="phone" placeholder="Phone Number"
>               <br> <br>

            <label>Gender </label>
            <br> <br>
            <input type="radio" name="gender" id="male">
            &nbsp;
            <span id="male">Male</span>
            &nbsp; &nbsp; &nbsp; &nbsp;
            
            <input type="radio" name="gender" id="female"> 
            &nbsp;
            <span id="female">Female</span>
            <br> <br>

            <label> First Language  </label>
            <br> <br>
            <input type="text" name="lang" id="language" placeholder="First Language"
>               <br> <br>

            <label> Country Of Birth </label>
            <br>
            <input type="text" name="cob" id="country" placeholder="Country Of Birth"
>               <br> <br>

                <label>Address </label>
            <br>
            <input type="text" name="add" id="address" placeholder="Current Address"
>               <br> <br>

                         

            <h2>Educational Background</h2> 
            
           <p>List your previous school's information</p>
           <br>

           <label>School Name </label>
            <br>
            <input type="text" name="secsch" id="highsch" placeholder="School Name"
>               <br> <br>

            <label>School Address</label>
            <br>
            <input type="text" name="schadd" id="schaddr" placeholder="School Address"
>               <br> <br>

            <label>Year of Graduation </label>
            <br>
            <input type="text" name="dog" id="DOG" placeholder="Graduation Year"
>               <br> <br>

                    <label>KCSE Grade </label>
            <br>
            <input type="text" name="grade" id="grade" placeholder="KCSE Grade"
>               <br> <br>

            <label>Do you suffer from any medical condition/disability that may affect your studies?</label>
            <br> <br>
            <input type="checkbox" name="cond" id="hearing">
               
               <span id="hearing">Hearing</span>
                        <br>
               <input type="checkbox" name="cond" id="learning">
                
               <span id="learning">Learning</span>
                            <br>
               <input type="checkbox" name="cond" id="mobility">
               
               <span id="mobility">Mobility</span>
                            <br>
               <input type="checkbox" name="cond" id="visual">
               
               <span id="visual">Visual</span>
                            <br>
               <input type="checkbox" name="cond" id="other">
               
               <span id="other">Other</span>
                    <br> <br>

                    <label>Other, Please specify</label>
            <br>
            <input type="text" name="other" id="otherd">
               <br> <br>    
               
               <input type="submit" value="Submit">
</form>
</body>


