<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{url('/group/edit/'. $edit->id)}}" method="POST" enctype="multipart/form-data">
@csrf
<label for="">Judul</label>
<input type="text" value="{{$edit->title}}" name="title" >
<label for="">Description</label>
<input type="text" value="{{$edit->description}}" name="description">
<label for="">Foto</label>
<img src="{{asset('storage/'. $edit->imagePath)}}" alt="">
<input type="file" value="{{asset('storage/'. $edit->imagePath)}}" name="imagePath" >
<button type="submit">Kirim</button>
</form>
</body>
</html>
