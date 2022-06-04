<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Employee</title>
</head>
<body>
<h1> Employee Details</h1>
<table border="1" width="100%">
    <tr>
        <th>Name</th>
        <td>{{$employee->name}}</td>
    </tr>
    <tr>
        <th>Email</th>
        <td>{{$employee->email}}</td>
    </tr>
    <tr>
        <th>Phone</th>
        <td>{{$employee->phone}}</td>
    </tr>
    <tr>
        <th>Address</th>
        <td>{{$employee->address}}</td>
    </tr>
    <tr>
        <th>Date of Birth</th>
        <td>{{$employee->dob}}</td>
    </tr>
    <tr>
        <th>Image</th>
        <td>{{$employee->image}}</td>
    </tr>
    <tr>
        <th>Created Date</th>
        <td>{{$employee->created_at}}</td>
    </tr>
    <tr>
        <th>Updated Date</th>
        <td>{{$employee->updated_at}}</td>
    </tr>
</table>
</body>
</html>
