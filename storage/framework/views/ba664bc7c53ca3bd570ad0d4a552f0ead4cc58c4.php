<!DOCTYPE html>
<html>


<body>

<h2>Class Attendance </h2>

<h3><?php echo e(Auth::user()->course_name); ?></h3>


<table style="width:50%">
  <tr>
    
    <th>Unit name</th>
    <th>Course</th>
    <th>Absent classes</th>
    <th>Absent hours</th>
    <th>Percent absent</th>
  </tr>
  <tr>
    <td><?php echo e(Auth::user()->unit_name); ?></td>
    <td><?php echo e(Auth::user()->course_name); ?></td>
    <td><?php echo e(Auth::user()->absent_classes); ?></td>
    <td><?php echo e(Auth::user()->hours_absent); ?></td>
    
 
</table>
<?php /**PATH C:\xampp\htdocs\NewIAPproject\Student management\–-prefer-dist\resources\views/attendance.blade.php ENDPATH**/ ?>