<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Course Unit</title>
</head>
<body>
<div>
<h1 style="display: flex; justify-content: center;">You have chosen</h1>
<br><br>
<h2 style="text-decoration: underline; color:#4baad9; display: flex; justify-content: center;">{{$course['name']}}</h2>
<form action="/click_select" method="POST">
@csrf
<input type="hidden" name="id" value="{{$course['id']}}"
<input type="hidden" class="form-control" name="subjectcode" value="{{$course['subjectcode']}}" >
<input type="hidden" class="form-control" name="name" value="{{$course['name']}}" aria-describedby="emailHelp" >
<input type="hidden" class="form-control" name="year" value="{{$course['year']}}" aria-describedby="emailHelp" >
<input type="hidden" class="form-control" name="semester" value="{{$course['semester']}}" aria-describedby="emailHelp" >
<div class="form-group">
<input type="hidden" class="form-control" name="status" value="{{$course['status']}}" aria-describedby="emailHelp" >
<br><br><br>

<button style=" position:relative; right:-730px" type="submit" name="submit" class="btn btn-primary" style="width: 50%">Accept</button>

</div>
</body>
</html>
