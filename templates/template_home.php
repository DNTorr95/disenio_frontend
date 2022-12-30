<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
    
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
        
        </ul>
  
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
  
          <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
            </a>
          </li>

          
        </ul>
    
        <!-- Right navbar links -->
        
      </nav>
      <!-- /.navbar -->
      
    
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a class="brand-link">
          <img src="static/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Sistema de Creditos</span>
        </a>
    
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="static/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="/home" class="d-block">Administrador</a>
            </div>
          </div>
    
    
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                  
                  
                  {% block menu %}
                  {% endblock %}
                  
                  <li class="nav-item">
                    <a href="/" class="nav-link">
                      <i class="fas fa-door-open nav-icon"></i>
                      <p>
                        Salir
                      </p>
                    </a>
      
                  </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
    
      <!-- Content Wrapper. Contains page content -->
      
      <div class="container py-3">
        {% block body %}

        {% endblock %}
      </div>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
          <h5>Title</h5>
          <p>Sidebar content</p>
        </div>
      </aside>
      <!-- /.control-sidebar -->
    
      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
       
        <!-- Default to the left -->
        <strong>Copyright &copy; 2021-2022 <a href="https://adminlte.io">Creditos Online</a>.</strong> Todos los derechos reservados.
      </footer>
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
    $(function () {
      $("#DataTable").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#DataTable_wrapper .col-md-6:eq(0)');
  
    });
  </script>
</body>







  <textarea name=""  id="" cols="30" rows="10"></textarea>
</html>