
{% extends "menu_ANT.php" %}
{% block menu %}

                <li class="nav-item">
                    <a href="/home_analista" class="nav-link">
                      <i class="nav-icon fas fa-user"></i>
                      <p>
                        POSTULANTES
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="/gestionar_notas_de_solicitud" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Gestionar notas de solicitud</p>
                        </a>
                      </li>
                    </ul>
                </li>
    

{% endblock %}





{% block body %}
    <h1>MIS DATOS:</h1>
{% endblock %}