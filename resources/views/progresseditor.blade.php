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
<h1 style="text-decoration: underline;">Edit Marks</h1>
</div>
<div class="container"><div class="jumbotron">
<form action="/click_edit" method="POST">
@csrf
<input type="hidden" name="id" value="{{$data['id']}}"
<div class="form-group">
<label>Academic Year</label>
<input type="text" class="form-control" name="academicyear" value="{{$data['academicyear']}}"  placeholder="Enter Academic Year">
</div>
<div class="form-group">
<label>Syllabus</label>
<input type="text" class="form-control" name="syllabus" value="{{$data['syllabus']}}" aria-describedby="emailHelp" placeholder="Enter Syllabus">
</div>
<div class="form-group">
<label>Year</label>
<input type="text" class="form-control" name="year" value="{{$data['year']}}" aria-describedby="emailHelp" placeholder="Enter Year">
</div>
<div class="form-group">
<label>Subject Code</label>
<input type="text" class="form-control" name="subjectcode" value="{{$data['subjectcode']}}" aria-describedby="emailHelp" placeholder="Enter Subject Code">
</div>
<div class="form-group">
<label>Subject Name</label>
<input type="text" class="form-control" name="subjectname" value="{{$data['subjectname']}}" aria-describedby="emailHelp" placeholder="Enter Subject Name">
</div>
<div class="form-group">
<label>Marks</label>
<input type="text" class="form-control" name="marks" value="{{$data['marks']}}" aria-describedby="emailHelp" placeholder="Enter Marks">
</div>
<div class="form-group">
<label>Grade</label>
<input type="text" class="form-control" name="grade" value="{{$data['grade']}}" aria-describedby="emailHelp" placeholder="Enter Grade">
</div>
<div class="form-group">
<label>Credits</label>
<input type="text" class="form-control" name="credits" value="{{$data['credits']}}" aria-describedby="emailHelp" placeholder="Enter Credits">
</div>
<div class="form-group">
<label>GPV</label>
<input type="text" class="form-control" name="gpv" value="{{$data['gpv']}}" aria-describedby="emailHelp" placeholder="Enter GPV">
</div>
<br>
<div class="form-group">
<button type="submit" name="submit" class="btn btn-primary" style="width: 50%">Update Data</button>

</div></div>
</body>
</html>
