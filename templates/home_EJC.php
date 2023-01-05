
{% extends "menu_EJC.php" %}

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
              <input type="text" class="form-control" id="ide" name="ide" style="width : 200px;" value=" "readonly>
            </div>
            <div class="form-group">
              <label for="">Codigo</label>
              <input type="text" class="form-control" id="codigoe" name="codigoe" style="width : 200px;" value=" "readonly>
            </div>
            <div class="form-group">
              <label for="">Oficina</label>
              <input type="text" class="form-control" id="oficina" name="oficina" style="width : 200px;" value=" " readonly>
            </div>
          
        </form>
    </center>
  </section>
</div>
{% endblock %}