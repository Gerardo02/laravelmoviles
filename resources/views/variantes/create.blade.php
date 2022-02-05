<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create variant</title>
</head>
<body>
    <h1>Create variant</h1>
    <a href="{{ route('variantes.index') }}">Back</a>
    <form method="post" action="{{ route('variantes.store') }}">
        @csrf
        <label>Lineage</label>
        <input type="text" name="lineage">
        <br/>
        <label>Common countries</label>
        <textarea name="common_countries" rows="6"></textarea>
        <br/>
        <label>Earliest date</label>
        <input type="text" name="earliest_date">
        <br/>
        <label>Designated number</label>
        <input type="text" name="designated_number">
        <br/>
        <label>Assigned number</label>
        <input type="text" name="assigned_number">
        <br/>
        <label>Description</label>
        <textarea name="description" rows="6"></textarea>
        <br/>
        <label>WHO name</label>
        <input type="text" name="who_name">
        <button type="submit">Save</button>
        <br/>

    </form>
</body>
</html>