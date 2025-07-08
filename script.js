document.addEventListener("DOMContentLoaded", cargarCanciones);

function cargarCanciones() {
  fetch("obtener_canciones.php")
    .then(response => response.json())
    .then(data => mostrarCanciones(data))
    .catch(error => {
      document.getElementById("listaCanciones").innerHTML = "Error al cargar canciones.";
      console.error(error);
    });
}

function mostrarCanciones(canciones) {
  const contenedor = document.getElementById("listaCanciones");
  contenedor.innerHTML = "";

  if (canciones.length === 0) {
    contenedor.innerHTML = "<p>No hay canciones registradas.</p>";
    return;
  }

  canciones.forEach(cancion => {
    const div = document.createElement("div");
    div.classList.add("cancion");
    div.innerHTML = `
      <h3>${cancion.titulo}</h3>
      <p><strong>Categoría:</strong> ${cancion.categoria}</p>
      <pre>${cancion.letra}</pre>
      <hr>
    `;
    contenedor.appendChild(div);
  });
}
