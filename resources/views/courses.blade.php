<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Selected Courses</title>
</head>
<body>
<div style="display: flex; justify-content: center;">
<h1 style="display: flex; justify-content: center; text-decoration: underline;">Selected Courses</h1>
</div>
<br><br>
<div style="display: flex; justify-content: center;">
<table class="table table-striped" border="2">
<tr>
<td>Number</td>
<td>Subject Code</td>
<td>Name</td>
<td>Year</td>
<td>Semester</td>
<td>Status</td>
</tr>
@foreach($courses as $course)
<tr>
<td>{{$course['id']}}</td>
<td>{{$course['subjectcode']}}</td>
<td>{{$course['name']}}</td>
<td>{{$course['year']}}</td>
<td>{{$course['semester']}}</td>
<td>{{$course['status']}}</td>
</tr>
@endforeach
</table>
</div>
<br><br><br>
<a style="color:black; display: flex; justify-content: center; font-size:28px;" href="choosecourse">Choose a Course</a>
</body>
</html>
