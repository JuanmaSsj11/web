<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Cancionero</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Cancionero del Grupo</h1>

  <div class="buscador">
    <input type="text" id="busqueda" placeholder="Buscar canción...">
    <select id="categoria">
      <option value="">Todas</option>
      <option value="Alabanza">Alabanza</option>
      <option value="Adoración">Adoración</option>
    </select>
    <button onclick="buscarCanciones()">Buscar</button>
  </div>

  <div id="listaCanciones">
    <p>Cargando canciones...</p>
  </div>

  <script src="script.js"></script>
</body>
</html>

