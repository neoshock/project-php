<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            width: 500px; /* Ancho del card */
            text-align: center;
        }

        .table-container {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        .heroe {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <div class="card">
        <header>
            <div class="heroe">
                <h1>Welcome to CodeIgniter 4!</h1>
                <h2>The small framework with powerful features</h2>
            </div>
        </header>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($result as $row) : ?>
                        <tr>
                            <td><?php echo $row->nombre; ?></td>
                            <td><?php echo $row->descripcion; ?></td>
                            <td><?php echo $row->precio; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <section>
            <h1>Features</h1>
            <p>This section describes the features of CodeIgniter 4.</p>
        </section>

        <footer>
            <p>&copy; 2024 Your Company</p>
        </footer>
    </div>

</body>

</html>
