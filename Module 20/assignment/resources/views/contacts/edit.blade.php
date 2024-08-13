<!DOCTYPE html>
<html>
<head>
    <title>Edit Contact</title>
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css"></head>
<body>
    <h2>Edit Contact</h2>
    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Name:</label>
            <input type="text" name="name" value="{{ $contact->name }}" required>
        </div>
        <div>
            <label>Email:</label>
            <input type="email" name="email" value="{{ $contact->email }}" required>
        </div>
        <div>
            <label>Phone:</label>
            <input type="text" name="phone" value="{{ $contact->phone }}">
        </div>
        <div>
            <label>Address:</label>
            <input type="text" name="address" value="{{ $contact->address }}">
        </div>
        <button type="submit">Update</button>
    </form>
</body>
</html>
