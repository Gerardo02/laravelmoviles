<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de variantes Covid 19</title>
</head>
<body>
    <h1>Covid19 variant list</h1>
    @if(Session::has('success'))
        <p style="color: green;">{{ Session::get('success') }}</p>
    @endif
    @if(Session::has('error'))
        <p style="color: red;">{{ Session::get('error') }}</p>
    @endif
    <p>*Updated up to January the 28th</p>
    <a href="{{ route('variantes.create') }}">Add variant</a>

    <table>
        <thead>
            <tr>
                <th>Lineage</th>
                <th>Common Countries</th>
                <th>Earliest date</th>
                <th>Designated number</th>
                <th>Assignated number</th>
                <th>Description</th>
                <th>WHO name</th>
                <th>Actions</th>
            </tr>
            <tbody>
                @foreach($variantes as $variantes)
                    <tr>
                        <td style="text-align: center; vertical-align: middle;">{{ $variantes -> lineage }}</td>
                        <td>{{ $variantes -> common_countries }}</td>
                        <td style="text-align: center; vertical-align: middle;">{{ $variantes -> earliest_date }}</td>
                        <td style="text-align: center; vertical-align: middle;">{{ $variantes -> designated_number }}</td>
                        <td style="text-align: center; vertical-align: middle;">{{ $variantes -> assigned_number }}</td>
                        <td>{{ $variantes -> description }}</td>
                        <td style="text-align: center; vertical-align: middle;">{{ $variantes -> who_name }}</td>
                        <td style="text-align: center; vertical-align: middle;">
                            <a href="{{ route('variantes.edit', $variantes -> id) }}">Edit</a>
                            <form action="{{ route('variantes.destroy', $variantes -> id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
        </thead>
    </table>
</body>
</html>