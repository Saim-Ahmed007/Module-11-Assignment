<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/addproduct" method="post">
        @csrf
        <label for="title">Product Name</label>
        <input type="text" name="title"><br><br><br>
        <label for="title">Quantity</label>
        <input type="text" name="title"><br><br><br>
        <label for="body">Description</label>
        <textarea name="body" id="" cols="30" rows="10"></textarea><br><br><br>
        <button>Add product</button>
    </form>
</body>
</html>