<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Edit a product</h1>
    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <form method="post" action="{{route('product.update', ['product' => $product])}}">
        @csrf
        @method('put')
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" placeholder="Product Name" value="{{$product->name}}">

            <label for="qty">Quantity:</label>
            <input type="number" name="qty" placeholder="Product Quantity" value="{{$product->qty}}">

            <label for="price">Price:</label>
            <input type="number" name="price" placeholder="Product Price" value="{{$product->price}}">
            
            <div>
                <label for="description"></label>
                <textarea name="description" placeholder="Product Description">{{$product->description}}</textarea>
            </div>
        </div>
        <div>
            <input type="submit" value="update">
        </div>
    </form>
</body>

</html>