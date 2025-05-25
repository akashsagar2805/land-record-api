<!DOCTYPE html>
<html>
<head>
    <title>Land Record Summary</title>
    <style>
        body { font-family: Arial, sans-serif; }
        h1 { text-align: center; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Land Record Summary</h1>
    <table>
        <thead>
            <tr>
                <th>Parcel ID</th>
                <th>Plot Number</th>
                <th>Owner Name</th>
                <th>Address</th>
                <th>Area (sqm)</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($records as $record)
                <tr>
                    <td>{{ $record->parcel_id }}</td>
                    <td>{{ $record->plot_number }}</td>
                    <td>{{ $record->owner_name }}</td>
                    <td>{{ $record->address }}</td>
                    <td>{{ $record->area }}</td>
                    <td>{{ $record->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
