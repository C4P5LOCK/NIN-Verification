<!DOCTYPE html>
<html>
<head>
    <title>NIN Verification Demo</title>
</head>
<body>
    <h1>NIN Verification Demo</h1>

    <form method="POST" action="{{ route('nin.verify') }}">
        @csrf

        <label>Enter NIN Number</label><br>
        <input type="text" name="nin" placeholder="Enter 11-digit NIN">

        <br><br>

        <button type="submit">Verify NIN</button>
    </form>

    @if(isset($user))
        <hr>

        <h3>Verification Result</h3>

        <p><strong>Name:</strong> {{ $user['name'] }}</p>

        <p><strong>Username:</strong> {{ $user['username'] }}</p>

        <p><strong>Email:</strong> {{ $user['email'] }}</p>

        <p><strong>Phone:</strong> {{ $user['phone'] }}</p>

        <p><strong>Website:</strong> {{ $user['website'] }}</p>
    @endif

</body>
</html>