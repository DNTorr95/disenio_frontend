
{% extends "menu_EJC.php" %}

{% block body %}
<div class="content-wrapper">
  <section class="content">
    <h4>Lista de cuentas vehiculares</h4>
    <table id="DataTable" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Nombre</th>
          
          <th>Celular</th>
          <th>Monto</th>
          <th>Saldo</th>
          
          <th>Correo</th>
          <th>Moneda</th>
          
          
          gestionar_cuenta
    
          <td>
            <center><a href="/nueva_cuenta"><button class="btn btn-primary">Nuevo</button></a></center>
            
          </td>
          
        </tr>
        </thead>
      <tbody>
            {% for cuenta in cuentas %}
            <tr>
              <td>{{cuenta.13}}</td>
              <td>{{cuenta.16}}</td>
              <td>{{cuenta.3}}</td>
              <td>{{cuenta.4}}</td>
              <td>{{cuenta.18}}</td>
              <td>{{cuenta.20}}</td>
              
              
              <td>
                
                <center>
                  <div class="btn-group">
                    <a href="#">
                      <button class="btn btn-secondary">EDITAR</button>
                    </a>
                    <a href="/eliminar_cuenta/{{cuenta.0}}">
                      <button class="btn btn-danger">DEL</button>
                    </a>
                  </div>
                </center>
                      
            </td>
            </tr>
            {% endfor %}
        
      </tbody>
    </table>
  </section>
</div>

{% endblock %}