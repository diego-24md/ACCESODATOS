<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>REPORTE 4 📢</title>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }
    thead th {
      background-color: lightblue;
    }
    td, th {
      border: 1px solid black;
      padding: 8px;
      text-align: left;
    }
  </style>
</head>
<body>

  <h1>Listado de Personas</h1>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>DNI</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($listaPersonas as $persona): ?>
      <tr>
        <td><?= htmlspecialchars($persona['idpersona']) ?></td>
        <td><?= htmlspecialchars($persona['nombres']) ?></td>
        <td><?= htmlspecialchars($persona['apellidos']) ?></td>
        <td><?= htmlspecialchars($persona['dni']) ?></td>
        <td><?= htmlspecialchars($persona['email']) ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</body>
</html>
