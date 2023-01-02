<!DOCTYPE html>
<html>
<head>
    
<title>Your profile</title>
</head>
<body>

<h1>Staff Profile</h1>   

                   
              
<p>Staff No:  <?php echo e(Auth::user()->id); ?> </p>
<p>Staff name: <?php echo e(Auth::user()->name); ?></p>
<p>Mobile Phone No: <?php echo e(Auth::user()->phonenumber); ?></p>
<p>Email address: <?php echo e(Auth::user()->email); ?></p>



</body>
</html>
<?php /**PATH C:\xampp\htdocs\NewIAPproject\Student management\–-prefer-dist\resources\views/Staffprofile.blade.php ENDPATH**/ ?>