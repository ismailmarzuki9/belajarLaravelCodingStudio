<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Laravel9</title>
</head>
<body>
    <div class="hed">
        <h1>Halama ADD</h1>
    </div>
    <a href='./getring/16';>Menuju halam 2</a></br>
    <a href='./pilter';>Menuju halam Filter</a></br>
    <a href='./showdetail/19';>Menuju halaman detail</a>
    <a href='./addData';>Menuju halaman detail</a>

    @if ($errors->any())
        @foreach($errors->all() as $error)
        <p>{{ $error}}</p>
        @endforeach
    @endif


    <form action="{{route('save')}}" method="POST">
        @csrf
        <input type="text" name="nama" placeholder="nama">
        <input type="number" name="nilai" placeholder="score">
        <button type="submit">Submit</button>
    </form>

</body>
</html>