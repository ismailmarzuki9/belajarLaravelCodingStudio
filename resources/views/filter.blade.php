<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Laravel9</title>
</head>
<body>
    <div class="hed">

    </div>
    <a href='./getring/1';>Menuju halam 2</a></br>
    <a href='./pilter';>Menuju halam Filter</a>
    <h1>halaman filter</h1>
    <table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Value</th>
  </tr>
  <th>
    @foreach ($filterSdt as $student) 
     <tr>
        <td>{{$student->id}}</td>
        <td>{{$student->nama}}</td>
        <td>{{$student->nilai}}</td>
     </tr>
    
    @endforeach
</th>
</table> 


</body>
</html>