<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    </head>
    <body>
    <div class="container">
        <table class="table" id="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Filter Field</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
            </thead>
        </table>
    </div>
    </body>

    <script>
        const token = '<token>';
        const startDate = '<YYYY-MM-DD>';
        const endDate = '<YYYY-MM-DD>';
        const filterField = '<целое число>';

        fetch('http://localhost:8000/api/tasks?start_date=' + startDate + '&end_date=' + endDate + '&filter_field=' + filterField, {
            headers: {
                'Authorization': 'Bearer ' + token
            }
        })
            .then(response => response.json())
            .then(data => {
                const table = document.getElementById('table');
                data.data.forEach(item => {
                    const row = table.insertRow();
                    const cell1 = row.insertCell(0);
                    const cell2 = row.insertCell(1);
                    const cell3 = row.insertCell(2);
                    const cell4 = row.insertCell(3);
                    const cell5 = row.insertCell(4);
                    const cell6 = row.insertCell(5);
                    cell1.innerHTML = item.id;
                    cell2.innerHTML = item.name;
                    cell3.innerHTML = item.description;
                    cell4.innerHTML = item.filter_field;
                    cell5.innerHTML = item.created_at;
                    cell6.innerHTML = item.updated_at;
                });
            });
    </script>
</html>
