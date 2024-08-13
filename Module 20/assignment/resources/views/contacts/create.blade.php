<!DOCTYPE html>
<html>
<head>
    <title>Create Contact</title>
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css"></head>
<body>
    <h2>Add New Contact</h2>
    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        <div>
            <label>Name:</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label>Phone:</label>
            <input type="text" name="phone">
        </div>
        <div>
            <label>Address:</label>
            <input type="text" name="address">
        </div>
        <button type="submit">Save</button>
    </form>
</body>
</html>
