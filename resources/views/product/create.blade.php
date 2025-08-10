<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
</head>
<body>
    <h1>Khaadi</h1>

    @if ($errors->any())
        <ul style="color:red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('product.store') }}">
        @csrf

        <label>Name:</label>
        <input type="text" name="name" placeholder="Product Name" required><br><br>

        <label>Quantity:</label>
        <input type="number" name="qty" placeholder="Product Quantity" required><br><br>

        <label>Price:</label>
        <input type="number" name="price" placeholder="Product Price" step="0.01" required><br><br>

        <label>Description:</label><br>
        <textarea name="description" placeholder="Product Description"></textarea><br><br>

        <label>Color:</label>
        <input type="text" name="color" placeholder="Color" required><br><br>

        <label>Brand:</label>
        <input type="text" name="brand" placeholder="Brand Name" required><br><br>

        <label>Category:</label>
        <input type="text" name="category" placeholder="Category (e.g. Shirts)" required><br><br>

        <label>Size:</label>
        <input type="text" name="size" placeholder="Size (e.g. M, L)" required><br><br>


        <label>Stitched/Unstitched:</label>
        <select name="suit_type" required>
            <option value="">--Select--</option>
            <option value="stitched">Stitched</option>
            <option value="unstitched">Unstitched</option>
        </select><br><br>

        <label>Gender:</label>
        <select name="gender" required>
            <option value="">--Select--</option>
            <option value="men">Men</option>
            <option value="women">Women</option>
        </select><br><br>

        <label>Season:</label>
        <select name="season" required>
            <option value="">--Select--</option>
            <option value="summer">Summer</option>
            <option value="winter">Winter</option>
        </select><br><br>

        <button type="submit">Save Product</button>
    </form>
</body>
</html>
