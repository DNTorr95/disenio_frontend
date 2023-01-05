


{% extends "menu_USR.php" %}


{% block body %}
<div class="content-wrapper"  >
  <section class="content">
  <center>
  <h4>DATOS PERSONALES</h4>
  </center>  
    <center>
        <form action="/" id="" method="post">
            <div class="form-group">
              <label for="">Nombre</label>
              <input type="text" class="form-control" id="nombreu" name="nombreu" style="width : 200px;" value=" "readonly>
            </div>
            <div class="form-group">
              <label for="">CI</label>
              <input type="text" class="form-control" id="ciu" name="ciu" style="width : 200px;" value=" "readonly>          
            </div>
            <div class="form-group">
              <label for="">Correo</label>
              <input type="text" class="form-control" id="correou" name="correou" style="width : 200px;" value=" " readonly>
            </div>
            <div class="form-group">
              <label for="">Celular</label>
              <input type="text" class="form-control" id="celularu" name="celularu" style="width : 200px;" value=" "readonly>
            </div>
        </form>
      
    </center>
  </section>
</div>
{% endblock %}