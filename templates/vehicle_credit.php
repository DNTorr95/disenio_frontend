<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>credito vehicular</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <div>
        <!-- Content Header (Page header) -->
        <section class="content-header" style="background-color: #4B4B4B;">
            <div class="container-fluid">
                <div>
                    <div>
                        <h1 style="color: white; margin-left: 710px;">CREDITO VEHICULAR</h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->


        <!-- Default box -->
        <a href="/"><button>VOLVER</button></a>
        <div>
            <div class="card-body row">
                <div class="col-5 text-center d-flex align-items-center justify-content-center">
                    <div class="">
                        <img src="https://www.mdzol.com/u/fotografias/m/2020/9/30/f1280x720-964291_1095966_5050.jpg" width="100%" style="margin-bottom: 550px;">
                    </div>
                </div>
                <div class="col-7">
                    <div class="form-group">
                        <p style="font-size: 25px;">REQUISITOS</p>
                    </div>
                    <div class="form-group">
                        <ul>
                            {% for requisito in requisitos %}
                                <li>
                                    {{requisito.1}}
                                </li>
                            
                            {% endfor %}
                        </ul>
                    </div>
                    <div class="form-group">
                        <p style="font-size: 25px;">BENEFICIOS</p>
                    </div>
                    <div class="form-group">
                        <ul>
                            {% for beneficio in beneficios %}
                                <li>
                                    {{beneficio.1}}
                                </li>
                            
                            {% endfor %}
                        </ul>
                    </div>
                    <div class="form-group">
                        <p style="font-size: 25px;">Agendar/Solicitar Credito</p>
                    </div>

                    <form action="/solicitar_credito_vehicular" method="post">
                        {% with messages = get_flashed_messages()  %}
                            {% for message in messages %}
                                    {{ message }}
                            {% endfor %}
                        {% endwith %}


                        <div class="form-group">
                            <label for="inputName">Nombre</label>
                            <input type="text" name="nombre" required id="inputName" class="form-control" placeholder="Nombre Completo" style="width: 450px;" />
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">E-Mail</label>
                            <input type="email" name="correo" required id="inputEmail" class="form-control" placeholder="Correo Electronico" style="width: 450px;" />
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="">CI</label>
                                    <input type="text" name="ci" id="inputSubject" class="form-control" placeholder="Numero de Carnet" style="width: 150px;" />
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="">Celular</label>
                                    <input id="inputSubject" name="celular" class="form-control" placeholder="Numero de telefono" style="width: 150px;"></input>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="">Edad</label>
                                    <input id="inputSubject" name="edad" class="form-control" placeholder="Edad" style="width: 80px;"></input>
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="inputSubject">Ingresos Mensuales</label>
                                    <input id="inputSubject" name="ingresos" class="form-control" style="width: 150px;"></input>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="inputSubject">Monto a Solicitar</label>
                                    <input id="inputSubject" name="monto" class="form-control" style="width: 150px;"></input>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="inputSubject">Plazo</label>
                                    <input id="inputSubject" name="plazo" class="form-control" style="width: 150px;"></input>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="inputSubject">Estado del Vehiculo</label>
                            <select name="estado" id="estado" class="form-control" style="width: 150px;">
                                <option value="nuevo">Nuevo</option>
                                <option value="usado">Usado</option>
                            </select>
                        </div>
                        
                        <button class="btn btn-primary" type="submit">SOLICITAR</button>
                    </form>

                </div>
            </div>




                    
                    
           
         
        </div>


        <!-- /.content -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="static/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="static/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="static/dist/js/adminlte.min.js"></script>



    <!--Font Awesome-->
    <link rel="stylesheet" href="{{ url_for('static', filename='/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- theme style -->
    <link rel="stylesheet" href="{{ url_for('static', filename='/dist/css/adminlte.min.css')}}">
    <!-- jsGrid -->
    <link rel="stylesheet" href="{{ url_for('static', filename='/plugins/jsgrid/jsgrid.min.css')}}">
    <link rel="stylesheet" href="{{url_for('static', filename='/plugins/jsgrid/jsgrid-theme.min.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{url_for('static', filename='/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{url_for('static', filename='/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{url_for('static', filename='/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>


    <!-- jsGrid -->
    <script src="static/plugins/jsgrid/demos/db.js"></script>
    <script src="static/plugins/jsgrid/jsgrid.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="static/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="static/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="static/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="static/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="static/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="static/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="static/plugins/jszip/jszip.min.js"></script>
    <script src="static/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="static/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="static/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="static/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="static/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>



    <script>
        $(function() {
            $("#DataTable").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#DataTable_wrapper .col-md-6:eq(0)');

        });
    </script>
</body>








</html>