<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Citas</title>
    <link rel="stylesheet" href="./public/css/style.css">
</head>
<body>
    <h1>Lista de Citas</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripcion:</th>
                <th>Fecha de la Cita: </th>
                <th>Cliente</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($citas as $cita): ?>
                <tr>
                    <td><?php echo htmlspecialchars($cita['id']); ?></td>
                    <td><?php echo htmlspecialchars($cita['descripcion']); ?></td>
                    <td><?php echo htmlspecialchars($cita['fecha_cita']); ?></td>
                    <td><?php echo htmlspecialchars($cita['cliente']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

