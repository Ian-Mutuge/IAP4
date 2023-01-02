<head>
    <style>
  body {
  background-color: mintcream;
}

h2 {
  
  text-align: center;
}

.center {
  margin-left: auto;
  margin-right: auto;
}

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
    </style>
</head>
<x-app-layout>
<div>
   <h2> Class Attendance</h2>

    <table style="width:50%" class="center">
    @foreach($data as $i)
    <tr>
<th>Unit name</th>
<th>Hours_present </th>
<th>Hours_absent</th>
<th>Percentage</th>
</tr>

<tr>
    <td>{{$i->name}}</td>
    <td>{{$i->hours_present}}</td>
    <td>{{$i->hours_absent}}</td>
    <td>({{$i->hours_present}}/{{$i->hours_present}}*100)</td>
</tr>
@endforeach
</table>

</div>
</x-app-layout>   