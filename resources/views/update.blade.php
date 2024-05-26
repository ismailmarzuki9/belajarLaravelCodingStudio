<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update Data</h1>
    <form action="{{ route('update', $data) }}" method="POST">
        @method('patch')
        @csrf
        <input type="text" name="nama" value="{{$data->nama}}">
        <input type="number" name="nilai" value="{{$data->nilai}}">
        <button type="submit">Submit</button>
    </form>
</body>
</html>