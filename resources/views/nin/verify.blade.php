<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/nin.css') }}">
    <title>NIN Verification Demo</title>
</head>
<body>
    <div class="container">
    <div class="card">
        <h1>NIN Verification Demo</h1>

        <form method="POST" action="{{ route('nin.verify') }}">
            @csrf

            <label>Enter NIN Number</label>
            <input type="text" name="nin" placeholder="Enter 11-digit NIN">

            <button type="submit">Verify NIN</button>
        </form>
    </div>

    @if(isset($user))
        <div class="card result">
            <h3>Verification Result</h3>

            <p><strong>Name:</strong> {{ $user['name'] }}</p>
            <p><strong>Username:</strong> {{ $user['username'] }}</p>
            <p><strong>Email:</strong> {{ $user['email'] }}</p>
            <p><strong>Phone:</strong> {{ $user['phone'] }}</p>
            <p><strong>Website:</strong> {{ $user['website'] }}</p>
            <p><strong>Status:</strong> VERIFIED ✅</p>
        </div>
    @endif
</div>
    
</body>
</html>