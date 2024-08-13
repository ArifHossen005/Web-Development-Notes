<!DOCTYPE html>
<html>
<head>
    <title>View Contact</title>
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css"></head>
<body>
    <h2>Contact Details</h2>
    <p><strong>Name:</strong> {{ $contact->name }}</p>
    <p><strong>Email:</strong> {{ $contact->email }}</p>
    <p><strong>Phone:</strong> {{ $contact->phone }}</p>
    <p><strong>Address:</strong> {{ $contact->address }}</p>
    <a href="{{ route('contacts.edit', $contact->id) }}">Edit</a>
    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</body>
</html>
