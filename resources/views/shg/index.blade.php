<!DOCTYPE html>
<html>
<head>
    <title>SHG Index</title>
</head>
<body>
    <h1>SHG Index</h1>

    <h2>SHG Applications</h2>

    <h2>SHG Application Bills</h2>
    <ul>
        @foreach ($shg as $shg)
            <li>{{ $shg->email_address }}</li>
        @endforeach
    </ul> 
</body>
</html>
