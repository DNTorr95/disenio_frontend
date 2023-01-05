
{% extends "menu_ANT.php" %}
 
{% block body %}
<div class="content-wrapper"  >
  <section class="content">
  <center>
  <h4>DATOS PERSONALES</h4>
  </center>  
 
 
    <center>
        <form action="/" id="" method="post">
            <div class="form-group">
              <label for="">Id</label>
              <input type="text" class="form-control" id="ida" name="ida" style="width : 200px;" value=" "readonly>
            </div>
            <div class="form-group">
              <label for="">Codigo usuario</label>
              <input type="text" class="form-control" id="codigoa" name="codigoa" style="width : 200px;" value=" "readonly>
            </div>
            <div class="form-group">
              <label for="">Profesión</label>
              <input type="text" class="form-control" id="profesion" name="profesion" style="width : 200px;" value=" " readonly>
            </div>
            <div class="form-group">
              <label for="">Dirección</label>
              <input type="text" class="form-control" id="direcciona" name="direcciona" style="width : 200px;" value=" "readonly>
            </div>
        </form>
    </center>
  </section>
</div>
{% endblock %}