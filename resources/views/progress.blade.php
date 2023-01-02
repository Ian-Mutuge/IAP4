<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Progress</title>
</head>
<body>
<div style="display: flex; justify-content: center;">
<h1 style="text-decoration: underline;">Progress Report</h1>
</div>
<br><br>
<div style="display: flex; justify-content: center;">
<table class="table table-bordered" border="2">
<tr>
<td>Number</td>
<td>Academic Year</td>
<td>Syllabus</td>
<td>Year</td>
<td>Subject Code</td>
<td>Subject Name</td>
<td>Marks</td>
<td>Grade</td>
<td>Credits</td>
<td>GPV</td>
</tr>
@foreach($marks as $mark)
<tr>
<td>{{$mark['id']}}</td>
<td>{{$mark['academicyear']}}</td>
<td>{{$mark['syllabus']}}</td>
<td>{{$mark['year']}}</td>
<td>{{$mark['subjectcode']}}</td>
<td>{{$mark['subjectname']}}</td>
<td>{{$mark['marks']}}</td>
<td>{{$mark['grade']}}</td>
<td>{{$mark['credits']}}</td>
<td>{{$mark['gpv']}}</td>
</tr>
@endforeach
</table>
</div>
<div>
<a href="progresschanger">Switch</a>
<a href="courses">Course</a>
</div>
</body>
</html>
