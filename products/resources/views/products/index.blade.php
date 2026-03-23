<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach ($allProducts as $product)
        <h1>name: {{ $product->name }}</h1>
    @endforeach
    <a href
</body>
</html>