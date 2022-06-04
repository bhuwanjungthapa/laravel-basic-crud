<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heading PLace</title>
</head>
<body>
<h1>Edit Form</h1>
<form action="{{route('employee.update',$employee->id)}}" method="post">
    <input type="hidden" name="_method" value="PUT">
    @csrf
    <label for="Name">Name</label>
    <input type="text" id="name" name="name" value="{{$employee->name}}">
    <br>
    <label for="address">Address</label>
    <input type="text" id="address" name="address" value="{{$employee->address}}">
    <br>
    <label for="Email">Email</label>
    <input type="text" id="email" name="email" value="{{$employee->email}}">
    <br>
    <label for="Phone">Phone</label>
    <input type="number" id="phone" name="phone" value="{{$employee->phone}}">
    <br>
    <label for="dob">Date of Birth</label>
    <input type="date" id="dob" name="dob" value="{{$employee->dob}}">
    <br>
    <label for="image">Image</label>
    <input type="file" id="image" name="image">
    <br>
    <br>
    <input type="submit" value="Update Record">
</form>
</body>
</html>
