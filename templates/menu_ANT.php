{% extends "template_home.php" %}
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
                        <a href="/home_analista" class="nav-link">
                          <i class="far fa-clipboard"></i>
                          <p>Mi información</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/notas_vivienda" class="nav-link">
                          <i class="fas fa-house-user"></i>
                          <p>Gestionar notas de solicitud credito vivienda</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/notas_consumo" class="nav-link">
                          <i class="fas fa-coins"></i>
                          <p>Gestionar notas de solicitud credito consumo</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/notas_vehicular" class="nav-link">
                          <i class="fas fa-car-side"></i>
                          <p>Gestionar notas de solicitud credito vehicular</p>
                        </a>
                      </li>
                    </ul>
                </li>

{% endblock %}