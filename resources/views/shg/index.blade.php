<!DOCTYPE html>
<html>
<head>
    <title>SHG Index</title>
</head>
<body>
    <h1>SHG Index</h1>

    <h2>SHG Members</h2>
    <ul>
        @foreach ($shg_members as $member)
            <li>{{ $member->updated_by}}</li>
        @endforeach
    </ul>

    <h2>SHG Applications</h2>
    <ul>
        @foreach ($shg_applications as $application)
            <li>{{ $application->application_type }}</li>
        @endforeach
    </ul>

    <h2>SHG Application Bills</h2>
    <ul>
        @foreach ($shg_application_bills as $bill)
            <li>{{ $bill->updated_by }}</li>
        @endforeach
    </ul>

    <h2>SHG Docs</h2>
    <ul>
        @foreach ($shg_docs as $doc)
            <li>{{ $doc->updated_by }}</li>
        @endforeach
    </ul>
</body>
</html>
