<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="http://127.0.0.1:8000/insert">tambah data</a>

    
    <h1>TEST CRUD LARAVEL</h1>
<table border="1" style="width:90vw;">
    <thead>
        <tr><th> student_id</th><th>name</th><th>dept_name</th><th>tot_cred</th><th>action</th></tr>
    </thead>

    <tbody>
        @foreach($mhs as $data)
        <tr>
            <th>{{$data->student_id}}</th>
            <th>{{$data->name}}</th>
            <th>{{$data->dept_name}}</th>
            <th>{{$data->tot_cred}}</th>
            <th></th>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>