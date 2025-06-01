<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>
            Add Record Here
        </h1>
        <form action="{{route('add.records')}}" method="post">
            @csrf
            <div>
                <label for="product_name">Product Name:</label>
                <input type="text" id="product_name" name="product_name" required>
            </div>
            <div>
                <label for="product_quantity">Quantity:</label>
                <input type="number" id="product_quantity" name="product_quantity" required>
            </div>
            <div>
                <label for="price">Price Per Unit:</label>
                <input type="number" id="price" name="price" required>
            </div>
            <div>
                <select name="shopkeeper_id" id="shopkeeper_id" required>
                    <option value="" disabled selected>Select Shopkeeper</option>
                    @foreach($shopkeepers as $shopkeeper)
                        <option value="{{ $shopkeeper->id }}">{{ $shopkeeper->name }}</option>
                    @endforeach
            </div>
            <input type="submit" value="Add Record">
        </form>
    </div>
</body>
</html>