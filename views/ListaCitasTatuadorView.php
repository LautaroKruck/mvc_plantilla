<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Lista de Citas de Tatuador</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripcion:</th>
                <th>Fecha de la Cita: </th>
                <th>Cliente</th>
                <th>Tatuador</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($citasPorTatuador as $cita): ?>
                <tr>
                    <td><?php echo htmlspecialchars($cita['id']); ?></td>
                    <td><?php echo htmlspecialchars($cita['descripcion']); ?></td>
                    <td><?php echo htmlspecialchars($cita['fecha_cita']); ?></td>
                    <td><?php echo htmlspecialchars($cita['cliente']); ?></td>
                    <td><?php echo htmlspecialchars($cita['tatuador']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>