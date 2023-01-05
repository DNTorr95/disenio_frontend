


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
              <input type="text" class="form-control" id="" name="edad_max" style="width : 200px;" value=" "readonly>
          
            </div>

            <div class="form-group">
              <label for="">CI</label>
              <input type="text" class="form-control" id="" name="ingreso" style="width : 200px;" value=" "readonly>
             
            </div>

          

            <div class="form-group">
              <label for="">Correo</label>
              <input type="text" class="form-control" id="" name="plazo" style="width : 200px;" value=" " readonly>
   
            </div>

            
            <div class="form-group">
              <label for="">Celular</label>
              <input type="text" class="form-control" id="" name="monto" style="width : 200px;" value=" "readonly>
 
            </div>
           
 
        </form>
      
    </center>
  </section>
</div>
{% endblock %}