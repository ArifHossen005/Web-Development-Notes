<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Example</title>
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">

</head>
<body>

    <h1>Form Example</h1>
    <form method="POST">
        @csrf
        <label>Name (4 to 8 characters):</label>
        <input type="text"  name="name">
        <label>Email</label>
        <input type="email" name="email">
        <button type="submit">Submit</button>
    </form>

</body>
</html>