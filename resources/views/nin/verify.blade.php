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
</body>
</html>