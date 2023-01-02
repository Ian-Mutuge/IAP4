
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Choose a Course</title>
</head>
<body>
<div style="display: flex; justify-content: center;">
<h1 style="text-decoration: underline;">Choose a course</h1>
</div>
<br><br>
<div style="display: flex; justify-content: center;">
<table class="table table-bordered table-hover" border="2">
<tr>
<td>Number</td>
<td>Subject Code</td>
<td>Name</td>
<td>Year</td>
<td>Semester</td>
<td>Status</td>
<td>Select</td>
</tr>
@foreach($courses as $course)
<tr>
<td>{{$course['id']}}</td>
<td>{{$course['subjectcode']}}</td>
<td>{{$course['name']}}</td>
<td>{{$course['year']}}</td>
<td>{{$course['semester']}}</td>
<td>{{$course['status']}}</td>
<td><a href="click_select/{{$course['id']}}">Select</a></td>
</tr>
@endforeach
</table>
</div>
</body>
</html>
