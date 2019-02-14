<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" name="productDiscount" action="{{route('productDiscount')}}">
    @csrf
    <p>Product Description</p>
    <input type="text" name="product">
    <p>List Price</p>
    <input type="number" name="price">
    <p>Discount Percent</p>
    <input type="number" name="discountPercent"><br>
    <button type="submit" name="submit" value="submit">submit</button>
</form>
</body>
</html>