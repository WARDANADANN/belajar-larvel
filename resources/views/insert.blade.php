<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
</head>
<body>
    <h1>form insert</h1>

    <form action="/insert" method="post">
        @csrf
        <label>
            student_id
            <input typ
            formele = "textt" name = "student_id">
        </label>
        <label>
            name
            <input type = "name" name = "name">
        </label>
        <label>
            dept_name
            <input type = "dept_name" name = "dept_name">
        </label>
        <label>
            tot_cred
            <input type = "tot_cred" name = "tot_cred">
        </label>
        <button type="submit">sumbit</button>
    </form>
</body>
</html>