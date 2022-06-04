<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
</head>
<body>
<h1> Product Details</h1>
<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <td>{{$product->id}}</td>
    </tr>
    <tr>
        <th>Name</th>
        <td>{{$product->name}}</td>
    </tr>
    <tr>
        <th>Price</th>
        <td>{{$product->price}}</td>
    </tr>
    <tr>
        <th>Stock</th>
        <td>{{$product->stock}}</td>
    </tr>
    <tr>
        <th>Image</th>
        <td>{{$product->Image}}</td>
    </tr>
    <tr>
        <th>Description</th>
        <td>{{$product->description}}</td>
    </tr>
    <tr>
        <th>Created Date</th>
        <td>{{$product->created_at}}</td>
    </tr>
    <tr>
        <th>Updated Date</th>
        <td>{{$product->updated_at}}</td>
    </tr>
    <tr>
        <th>Deleted Date</th>
        <td>{{$product->deleted_at}}</td>
    </tr>
</table>
</body>
</html>
