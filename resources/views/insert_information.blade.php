<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Creación de Incidencias</title>
</head>
<body>
<!-- Page Wrapper -->
<div id="wrapper">

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

        <br><br>
            <!-- Page Heading -->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#userModal">
                <i class="fas fa-user-plus"></i>
                Crear Incidencia
            </button>
            <br><br>

            <!-- Modal -->
            <div class="modal fade" id="userModal" role="dialog" aria-labelledby="userModalCenterTitle"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <form id="formUser">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Incidencias</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <span for="id1"></span>
                                    <input type="hidden" name="id" class="form-control" id="id"
                                        readonly>
                                </div>
                                <div class="form-group">
                                    <span for="name1">Nombre</span>
                                    <input type="text" name="name" class="form-control" id="name">
                                </div>
                                <div class="form-group">
                                    <span for="email1">Correo Electrónico</span>
                                    <input type="email" name="email" class="form-control" id="email"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <span>Agente</span>
                                    <select id="agent" name="agent" class="form-control">
                                        <option value="Inoc Trejo">Inoc Trejo</option>
                                        <option value="Comandante Helios">Comandante Helios</option>
                                        <option value="Gerardo Jimenez">Gerardo Jiménez</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <span for="agent1">Actividad</span>
                                    <input type="text" name="activity" class="form-control" id="activity">
                                </div>
                                <div class="form-group">
                                    <span for="comments">Comments</span>
                                    <input type="text" name="comments" class="form-control"
                                        id="comments">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary"
                                    id="saveUser">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    Lista de Incidencias
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table id="DataTableIncidence" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Correo Electrónico</th>
                                    <th>Agente</th>
                                    <th>Actividad</th>
                                    <th>Comentarios</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
<script src="{{ asset('static/js/informationUpload.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>