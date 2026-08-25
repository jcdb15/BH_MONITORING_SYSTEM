<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>

<body>

    <h1>Welcome, {{ Auth::user()->name }}</h1>

    <p>You are successfully logged in.</p>

    <form action="{{ route('admin.logout') }}" method="POST">
        @csrf

        <button type="submit">
            Logout
        </button>
    </form>

</body>
</html>