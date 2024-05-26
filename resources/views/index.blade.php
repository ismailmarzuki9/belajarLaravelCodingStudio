<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Laravel9</title>
    <style>
     table th, td {
        border-bottom: 3px solid black;
      }
    </style>
</head>
<body>
    <div class="hed">
        <h1>Halama index utama</h1>
    </div>
    <a href='./getring/16';>Menuju halam 2</a></br>
    <a href='./pilter';>Menuju halam Filter</a></br>
    <a href='./showdetail/19';>Menuju halaman detail</a>
    <a href='./addData';>Menuju halaman Add Data</a>
    <table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Value</th>
    <th>Cereat Ad</th>
    <th>create update</th>
    <th>Aksion</th>
  </tr>
  <th>
    @foreach ($data as $student) 
     <tr>
        <td>{{$student->id}}</td>
        <td>
          <a href="{{route('show',$student->id)}}">{{$student->nama}}</a>
        </td>
        <td>{{$student->nilai}}</td>
        <td>{{$student->update_at}}</td>
        <td>{{$student->create_at}}</td>
        <td>
          <form action="{{route('update',$student)}}" method="get">
            @csrf
            <button type="submit">Update</button>
          </form> |
          <form action="{{route('delet',$student)}}" method="post">
            @method('delete')
            @csrf
            <button type="submit">Delete</button>
          </form>
        </td>
     </tr>
    
    @endforeach
</th>
</table> 

Current page :{{ $data->currentPage() }}</br>;
Total page :{{ $data->total() }};</br>
Data per page:{{ $data->perPage() }}</br>;

{{ $data->links('pagination::bootstrap-4') }};
</body>
</html>