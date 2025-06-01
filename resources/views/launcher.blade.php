<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Launcher</h1>
        <form action="{{route('register.shop.view')}}" method="post">
            @csrf
            <input type="submit" value="Register Shopkeeper">
        </form>
        <form action="{{route('add.records.view')}}" method="post">
            @csrf
            <input type="submit" value="Add Record">
        </form>
        <form action="{{route('view.records')}}" method="post">
            @csrf
            <input type="submit" value="View Records">
        </form>
    </div>
</body>
</html>