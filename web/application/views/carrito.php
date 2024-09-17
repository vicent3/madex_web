<div class="container mt-5">
    <h2 class="mb-4">Tabla</h2>
    <table class="table table-striped table-bordered">
      <thead class="table-dark">
        <tr>
          <th scope="col">Nro</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">usuario</th>
          <th scope="col">Accion</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>John</td>
          <td>Doe</td>
          <td>@johndoe</td>
          <td>
            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal" onclick="populateModal('John', 'Doe', '@johndoe')">Editar</button>
            <button class="btn btn-danger btn-sm">Eliminar</button>
          </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jane</td>
          <td>Smith</td>
          <td>@janesmith</td>
          <td>
            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal" onclick="populateModal('Jane', 'Smith', '@janesmith')">Editar</button>
            <button class="btn btn-danger btn-sm">Eliminar</button>
          </td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Bob</td>
          <td>Johnson</td>
          <td>@bobjohnson</td>
          <td>
            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal" onclick="populateModal('Bob', 'Johnson', '@bobjohnson')">Editar</button>
            <button class="btn btn-danger btn-sm">Eliminar</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Edit Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Editar User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="editForm">
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="nombre">
            </div>
            <div class="mb-3">
              <label for="apellido" class="form-label">Apellido</label>
              <input type="text" class="form-control" id="apellido">
            </div>
            <div class="mb-3">
              <label for="usuario" class="form-label">usuario</label>
              <input type="text" class="form-control" id="usuario">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </div>
  </div>


  <!-- JavaScript to populate the modal with user data -->
  <script>
    function populateModal(nombre, apellido, usuario) {
      document.getElementById('nombre').value = nombre;
      document.getElementById('apellido').value = apellido;
      document.getElementById('usuario').value = usuario;
    }
  </script>