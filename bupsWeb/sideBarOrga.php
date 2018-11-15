<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Organizador</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/bootstrap 4/bootstrap.css" />
    <link rel="stylesheet" href="css/bootstrap 4/adicionalAdmin.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
      integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
  </head>

  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      <nav id="sidebar" class="shadow barral">
        <div id="sidebarCollapse"class="sidebar-header shadow-sm barral">
          <h3 class="text-center">EEAS Organizador</h3>
          <strong><i class="fas fa-user-circle fa-lg"></i></strong>
        </div>

        <ul class="list-unstyled components">
          <li>
            <a
              href="#"
              onclick="toggleVisibility('orgaDash')"
              class="text-dark"
            >
              <i class="fas fa-list-alt fa-lg"></i>Dashboard
            </a>
          </li>
          <li>
            <a
              href="#OrgaSubmenu"
              data-toggle="collapse"
              aria-expanded="false"
              class="dropdown-toggle text-dark"
            >
              <i class="fas fa-address-card fa-lg"></i>Gestionar Personal
            </a>
            <ul class="collapse list-unstyled" id="OrgaSubmenu">
              <li>
                <a
                  href="#"
                  onclick="toggleVisibility('staff')"
                  class="text-dark"
                  >Staff</a
                >
              </li>
              <li>
                <a
                  href="#"
                  onclick="toggleVisibility('serviciomedico')"
                  class="text-dark"
                  >ServicioMedico</a
                >
              </li>
              <li>
                <a
                  href="#"
                  onclick="toggleVisibility('usuario')"
                  class="text-dark"
                  >Usuario</a
                >
              </li>
            </ul>
          </li>
          <li>
            <a
              href="#"
              onclick="toggleVisibility('orgaEvento')"
              class="dropdown-toggle text-dark"
            >
              <i class="fas fa-calendar fa-lg"></i>Evento
            </a>
          </li>
          <li>
            <a
              href="#ReportesSubmenu"
              data-toggle="collapse"
              aria-expanded="false"
              class="dropdown-toggle text-dark"
            >
              <i class="fas fa-sticky-note fa-lg"></i>Reportes
            </a>
            <ul class="collapse list-unstyled" id="ReportesSubmenu">
              <li>
                <a
                  href="#"
                  onclick="toggleVisibility('gananciasTotales')"
                  class="text-dark"
                  >Nuevo</a
                >
              </li>
              <li>
                <a
                  href="#"
                  onclick="toggleVisibility('gananciasProducto')"
                  class="text-dark"
                  >Reportes</a
                >
              </li>
            </ul>
          </li>
          <li>
            <a
              href="#"
              onclick="toggleVisibility('cartagantt')"
              class="text-dark"
            >
              <i class="fas fa-archive fa-lg"></i>CartaGantt
            </a>
          </li>
          <li>
            <a href="src/proces-unlgn.php" class="text-dark">
              <i class="fas fa-user-circle fa-lg"></i>Cerrar sesión
            </a>
          </li>
        </ul>
      </nav>

      <!-- Page Content -->
      <div
        id="content"
        style="background: linear-gradient(to top left, #6600ff 0%, #cc99ff 100%);"
      >
        <div class="container">
          <nav
            class="navbar navbar-expand-lg navbar-light bg-white shadow barral"
            style="background: linear-gradient(to top left, #6600ff 0%, #cc33ff 100%)"
          >
            <div class="container-fluid">
              <h4 class="mx-auto">
                Sistema de Encuentro, Expresion y Arte Scout.
              </h4>
            </div>
          </nav>
        </div>

        <!--
          xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxAdmin Menuxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
        -->
        <div id="orgaDash" style="display: none; padding-top: 3rem;">
          <div class="card w-100 mx-auto shadow">
            <div class="card-body"><canvas id="myChart"></canvas></div>
            <!-- CARD BODY -->
          </div>
          <!-- CARD -->
        </div>
        <div id="staff" style="display: none; padding-top: 3rem;">
          <div class="card w-100 mx-auto shadow">
            <div class="card-header bg-white">
              <select class="custom-select" id="formSelect0">
                <option value="0">Agregar Staff</option>
                <option value="1">Editar Staff</option>
              </select>
            </div>

            <div class="card-body">
              <div id="0" class="formulario 0">
                <form>
                  <div class="form-row">
                    <label for="eliminarUsuario">Nombre de usuario</label>
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control"
                        id="eliminarUsuario"
                        placeholder="nombre del usuario"
                      />
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                          buscar
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
                <div class="table-responsive" style="padding-top: 2rem;">
                  <table class="table table-hover table-bordered">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">Tipo de usuario</th>
                        <th scope="col">CUM</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido Paterno</th>
                        <th scope="col">Apellido Materno</th>
                        <th scope="col">Editar</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr
                        data-toggle="modal"
                        data-target="#modalConfirmacionStaff"
                      >
                        <td>Organizador(1)</td>
                        <td>JAL0720230</td>
                        <td>Ricardo</td>
                        <td>Navarro</td>
                        <td>Viña</td>
                        <td>
                          <i
                            onClick="modalConfiramacionStaff"
                            class="fas fa-edit fa-lg"
                          ></i>
                          <i class="fas fa-minus-circle fa-lg"></i>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <button class="btn btn-primary" type="submit">Guardar</button>
              </div>
              <!-- formulario 0 -->

              <div id="1" class="formulario 1" style="display: none;">
                <form>
                  <div class="form-row">
                    <label for="eliminarUsuario">Nombre de usuario</label>
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control"
                        id="eliminarUsuario"
                        placeholder="Nombre del uusar"
                      />
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                          buscar
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
                <div class="table-responsive" style="padding-top: 2rem;">
                  <table class="table table-hover table-bordered">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">Tipo de usuario</th>
                        <th scope="col">CUM</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido Paterno</th>
                        <th scope="col">Apellido Materno</th>
                        <th scope="col">Editar</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr
                        data-toggle="modal"
                        data-target="#modalConfirmacionStaff"
                      >
                        <td>Organizador(1)</td>
                        <td>JAL0720230</td>
                        <td>Ricardo</td>
                        <td>Navarro</td>
                        <td>Viña</td>
                        <td>
                          <i
                            onClick="modalConfiramacionStaff"
                            class="fas fa-edit fa-lg"
                          ></i>
                          <i class="fas fa-minus-circle fa-lg"></i>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <button class="btn btn-primary" type="submit">Guardar</button>
                </div>
              </div>
              <!-- formulario 1 -->
            </div>
            <!-- CARD BODY -->
          </div>
          <!-- CARD -->
        </div>
        <!-- staff -->

        <div id="serviciomedico" style="display: none; padding-top: 3rem;">
          <div class="card w-100 mx-auto shadow">
            <div class="card-header bg-white">
              <select class="custom-select" id="formSelect2">
                <option value="01">Agregar ServicioMedico</option>
                <option value="11">Editar ServicioMedico</option>
              </select>
            </div>

            <div class="card-body">
              <div id="01" class="formulario 01">
                <form>
                  <h6 class="text-primary">Datos de ususario</h6>
                  <hr />
                  <div class="form-row">
                    <div class="col-md-3 mb-2">
                      <label for="validationDefault01">Nombre</label>
                      <input
                        type="text"
                        class="form-control"
                        id="validationDefault01"
                        required
                      />
                    </div>
                    <div class="col-md-3 mb-2">
                      <label for="validationDefault02">Apellido Paterno</label>
                      <input
                        type="text"
                        class="form-control"
                        id="validationDefault02"
                        required
                      />
                    </div>
                    <div class="col-md-3 mb-2">
                      <label for="validationDefault03">Apellido Materno</label>
                      <input
                        type="text"
                        class="form-control"
                        id="validationDefault03"
                        required
                      />
                    </div>
                    <div class="col-md-3 mb-2">
                      <label for="validationDefault03">Telefono</label>
                      <input
                        type="text"
                        class="form-control"
                        id="validationDefault03"
                        required
                      />
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="col-md-3 mb-3">
                      <label for="validationDefault03">Correo</label>
                      <input
                        type="text"
                        class="form-control"
                        id="validationDefault03"
                        required
                      />
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="validationDefault04">Contraseña</label>
                      <input
                        type="text"
                        class="form-control"
                        id="validationDefault04"
                        required
                      />
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="validationDefault05">Nombre de usuario</label>
                      <input
                        type="text"
                        class="form-control"
                        id="validationDefault05"
                        required
                      />
                    </div>
                  </div>

                  <h6 class="text-primary">Domicilio</h6>
                  <hr />
                  <div class="form-row">
                    <div class="col-md-4 mb-2">
                      <label for="validationDefault01">Calle</label>
                      <input
                        type="text"
                        class="form-control"
                        id="validationDefault01"
                        required
                      />
                    </div>
                    <div class="col-md-2 mb-2">
                      <label for="validationDefault02">Numero</label>
                      <input
                        type="text"
                        class="form-control"
                        id="validationDefault02"
                        required
                      />
                    </div>
                    <div class="col-md-4 mb-2">
                      <label for="validationDefault03">colonia</label>
                      <input
                        type="text"
                        class="form-control"
                        id="validationDefault03"
                        required
                      />
                    </div>
                    <div class="col-md-2 mb-2">
                      <label for="validationDefault03">Código postal</label>
                      <input
                        type="text"
                        class="form-control"
                        id="validationDefault03"
                        required
                      />
                    </div>
                  </div>

                  <button class="btn btn-primary" type="submit">
                    Agregar ServicioMedico
                  </button>
                </form>
              </div>
              <!-- formulario 0 -->

              <div id="11" class="formulario 11" style="display: none;">
                <form>
                  <div class="form-row">
                    <label for="eliminarUsuario">Nombre de usuario</label>
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control"
                        id="eliminarUsuario"
                        placeholder="nombre_empresa"
                      />
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                          buscar
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
                <div class="table-responsive" style="padding-top: 2rem;">
                  <table class="table table-hover table-bordered">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">Nombre de usuario</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Tipo de usuario</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido paterno</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr
                        data-toggle="modal"
                        data-target="#modalConfirmacionServicioMedico"
                      >
                        <td>ejemploEmpresa</td>
                        <td>ejemplo@empresa.com</td>
                        <td>Staff (1)</td>
                        <td>Juan</td>
                        <td>González</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- formulario 1 -->
            </div>
            <!-- CARD BODY -->
          </div>
          <!-- CARD -->
        </div>
        <!-- servicioMedico -->

        <div id="usuario" style="display: none; padding-top: 3rem;">
          <div class="card w-100 mx-auto shadow">
            <div class="card-header header bg-white text-center">
              <h4>Eliminar usuario</h4>
            </div>
            <div class="card-body">
              <form>
                <div class="form-row">
                  <label for="eliminarUsuario">Nombre de usuario</label>
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control"
                      id="eliminarUsuario"
                      placeholder="JAL0720230"
                    />
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="submit">
                        Buscar
                      </button>
                    </div>
                  </div>
                </div>
              </form>
              <div class="table-responsive" style="padding-top: 2rem;">
                <table class="table table-hover table-bordered">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">Nombre de usuario</th>
                      <th scope="col">Correo</th>
                      <th scope="col">Tipo de usuario</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Apellido paterno</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr
                      data-toggle="modal"
                      data-target="#modalConfirmacionUsuario"
                    >
                      <td>ejemploUsuario</td>
                      <td>ejemplo@usuario.com</td>
                      <td>Usuario (0)</td>
                      <td>el</td>
                      <td>wey</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- tabla -->
            </div>
            <!-- Card-body -->
          </div>
          <!-- CARD -->
        </div>
        <!-- Usuario -->

        <div id="gananciasTotales" style="display: none; padding-top: 3rem;">
          <div class="card w-100 mx-auto shadow">
            <div class="card-header header bg-white text-center">
              <h4>Ganacias totales</h4>
            </div>
            <div class="card-body">
              <form>
                <div class="form-row">
                  <label for="ganaciasStaff">Staff</label>
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control"
                      id="ganaciasStaff"
                      placeholder="Hewlett-Packard"
                    />
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="submit">
                        Buscar
                      </button>
                    </div>
                  </div>
                </div>
              </form>
              <div class="table-responsive" style="padding-top: 2rem;">
                <table class="table table-bordered">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">Staff</th>
                      <th scope="col">Ingreso generado</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Intel</td>
                      <td class="text-success">$30,000,000</td>
                    </tr>
                    <tr>
                      <td>Hewlett-Packard</td>
                      <td class="text-success">$50,000,000</td>
                    </tr>
                    <tr>
                      <td>Nvidia</td>
                      <td class="text-success">$10,000,000</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- tabla -->
              <div
                class="container bg-light rounded shadow-sm"
                style="padding: 20px;"
              >
                <h6>Ingreso total</h6>
                <hr />
                <h5 class="text-success">
                  <i class="fas fa-dollar-sign fa-lg"></i> 90,000,000
                </h5>
              </div>
            </div>
            <!-- Card-body -->
          </div>
          <!-- CARD -->
        </div>
        <!-- gananciasTotales -->

        <div id="gananciasProducto" style="display: none; padding-top: 3rem;">
          <div class="card w-100 mx-auto shadow">
            <div class="card-header header bg-white text-center">
              <h4>Ganacias por producto</h4>
            </div>
            <div class="card-body">
              <form>
                <div class="form-row">
                  <label for="idProducto">Id de producto</label>
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control"
                      id="idProducto"
                      placeholder="HP-1ZW00LA"
                    />
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="submit">
                        Buscar
                      </button>
                    </div>
                  </div>
                </div>
              </form>
              <div class="table-responsive" style="padding-top: 2rem;">
                <table class="table table-bordered">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">ID Producto</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Staff</th>
                      <th scope="col">Productos vendidos</th>
                      <th scope="col">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>HP-1ZW00LA</td>
                      <td>HP OMEN 15</td>
                      <td>Hewlett-Packard</td>
                      <td>3</td>
                      <td class="text-success">$72,000</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- tabla -->
            </div>
            <!-- Card-body -->
          </div>
          <!-- CARD -->
        </div>
        <!-- ganacias por producto -->

        <div id="inventario" style="display: none; padding-top: 3rem;">
          <div class="card w-100 mx-auto shadow">
            <div class="card-header header bg-white text-center">
              <h4>Inventario en tienda</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive" style="padding-top: 2rem;">
                <table class="table table-bordered">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">ID Producto</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Cantidad</th>
                      <th scope="col">Precio</th>
                      <th scope="col">Categoría</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>HP-1ZW00LA</td>
                      <td>HP OMEN 15</td>
                      <td>30</td>
                      <td class="text-success">$24,000</td>
                      <td>Laptops</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- tabla -->
            </div>
            <!-- Card-body -->
          </div>
          <!-- CARD -->
        </div>
        <!-- Inventario -->
      </div>
      <!-- Admin dash -->
    </div>
    <!-- contenido -->

    <!-- Modal confirmación staff -->
    <div class="modal" id="modalConfirmacionStaff">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Confirmar</h4>
            <button type="button" class="close" data-dismiss="modal">
              &times;
            </button>
          </div>
          <div class="modal-body">
            <h4>¿Quieres eliminar a -username- de la lista?</h4>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" name="eliminarProv">
              Aceptar
            </button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">
              Cancelar
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal confirmación -->

    <!-- Modal confirmación servicioMedico -->
    <div class="modal" id="modalConfirmacionServicioMedico">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Confirmar</h4>
            <button type="button" class="close" data-dismiss="modal">
              &times;
            </button>
          </div>
          <div class="modal-body">
            <h4>¿Quieres eliminar a -username- de la lista?</h4>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" name="eliminarProv">
              Aceptar
            </button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">
              Cancelar
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal confirmación -->

    <!-- Modal confirmación usuario -->
    <div class="modal" id="modalConfirmacionUsuario">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Confirmar</h4>
            <button type="button" class="close" data-dismiss="modal">
              &times;
            </button>
          </div>
          <div class="modal-body">
            <h4>¿Quieres eliminar a -username- de la lista?</h4>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" name="eliminarProv">
              Aceptar
            </button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">
              Cancelar
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal confirmación -->

    <script type="text/javascript">
      //control de panel lateral
      $(document).ready(function() {
        $("#sidebarCollapse").on("click", function() {
          $("#sidebar").toggleClass("active");
        });
        $("#content").on("click", function() {
          $("#sidebar").addClass("active");
        });
      });
      //control de panel lateral

      //Mostrar la opcion de panel lateral
      var divs = [
        "staff",
        "usuario",
        "serviciomedico",
        "gananciasTotales",
        "gananciasProducto",
        "inventario",
        "orgaDash"
      ];
      var visibleDivId = null;

      function toggleVisibility(divId) {
        if (visibleDivId === divId) {
          visibleDivId = null;
        } else {
          visibleDivId = divId;
        }
        hideNonVisibleDivs();
      }

      function hideNonVisibleDivs() {
        var i, divId, div;
        for (i = 0; i < divs.length; i++) {
          divId = divs[i];
          div = document.getElementById(divId);
          if (visibleDivId === divId) {
            div.style.display = "block";
          } else {
            div.style.display = "none";
          }
        }
      }
      //Mostrar la opcion de panel lateral

      //Seleccionar formulario1
      $(function() {
        $("#formSelect0").change(function() {
          $(".formulario").hide();
          $("#" + $(this).val()).show();
        });
      });
      //seleccionar formulario1
      //Seleccionar formulario2
      $(function() {
        $("#formSelect1").change(function() {
          $(".formulario").hide();
          $("#" + $(this).val()).show();
        });
      });
      //seleccionar formulario2
      //Seleccionar formulario3
      $(function() {
        $("#formSelect2").change(function() {
          $(".formulario").hide();
          $("#" + $(this).val()).show();
        });
      });
      //seleccionar formulario3

      //graficas
      var ctx = document.getElementById("myChart").getContext("2d");
      var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: "line",

        // The data for our dataset
        data: {
          labels: ["Agosto", "Septiembre", "Octubre", "Novimbre", "Diciembre"],
          datasets: [
            {
              label: "39° EEAS 'Personas Registradas' ",
              backgroundColor: "rgb(255, 99, 132)",
              borderColor: "rgb(255, 99, 132)",
              data: [0, 1000, 4350, 7600, 11200]
            }
          ]
        },

        // Configuration options go here
        options: {}
      });
    </script>
  </body>
</html>