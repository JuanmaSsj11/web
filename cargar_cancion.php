<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST["titulo"];
    $categoria = $_POST["categoria"];
    $letra = $_POST["letra"];

    $stmt = $conn->prepare("INSERT INTO canciones (titulo, categoria, letra) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $titulo, $categoria, $letra);

    if ($stmt->execute()) {
        echo "✅ Canción agregada correctamente. <a href='cargar_cancion.php'>Agregar otra</a>";
    } else {
        echo "❌ Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar canción</title>
</head>
<body>
    <h1>Agregar nueva canción</h1>
    <form method="post">
        <label>Título:</label><br>
        <input type="text" name="titulo" required><br><br>

        <label>Categoría:</label><br>
        <select name="categoria" required>
            <option value="Alabanza">Alabanza</option>
            <option value="Adoración">Adoración</option>
        </select><br><br>

        <label>Letra con acordes:</label><br>
        <textarea name="letra" rows="10" cols="50" required></textarea><br><br>

        <input type="submit" value="Guardar canción">
    </form>
</body>
</html>
<?php } ?>

