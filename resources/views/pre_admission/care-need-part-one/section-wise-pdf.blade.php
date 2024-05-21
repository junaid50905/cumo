<!DOCTYPE html>
<html>

<head>
    <title>Your PDF Title</title>
    <style>
        /* Define your general styles here */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #f2f2f2;
            text-align: center;
            padding: 10px 0;
        }

        .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #f2f2f2;
            text-align: center;
            padding: 10px 0;
            display: none;
        }

        .content {
            margin-top: 50px; /* Adjust based on header height */
            margin-bottom: 50px; /* Adjust based on footer height */
        }

        .table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <div class="header">
        <!-- Your header content goes here -->
        <h1>Header Content</h1>
    </div>

    <div class="content">
        <h2 style="text-align: center;">Introduction</h2>
        <table class="table">
            <caption>Sample Table Title</caption>
            <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <!-- Table content goes here -->
                @for($i =1; $i< 100; $i++)
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                @endfor
            </tbody>
        </table>
    </div>

    <div class="footer">
        <!-- Your footer content goes here -->
        <p>Footer Content</p>
    </div>
</body>

</html>
