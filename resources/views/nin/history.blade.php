<!DOCTYPE html>
<html>
<head>
    <title>NIN History</title>
    <link rel="stylesheet" href="{{ asset('css/nin.css') }}">
</head>
<body>
    <div class="container">
        <div class="card">
            <h1>Verification History</h1>

            <a href="{{ route('nin.form') }}">Verify New NIN</a>
        </div>

        <table>
            <tr>
                <th>NIN</th>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
            </tr>

            @foreach($verifications as $verification)
                <tr>
                    <td>{{ $verification->nin }}</td>
                    <td>{{ $verification->name }}</td>
                    <td>{{ $verification->email }}</td>
                    <td>{{ strtoupper($verification->status) }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>