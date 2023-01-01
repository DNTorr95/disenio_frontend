{% extends "template_home.php" %}
{% block menu %}
                <li class="nav-item">
                    <a href="/home_ejecutivo" class="nav-link">
                      <i class="nav-icon fas fa-user"></i>
                      <p>
                        Mis datos
                      </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-tasks"></i>
                      <p>
                        Gestionar creditos
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="/gestionar_creditos_vehiculares" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Credito vehicular </p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/gestionar_mis_cuentas" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Credito de consumo</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/gestionar_mis_cuentas" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Credito de vivienda</p>
                        </a>
                      </li>
                    </ul>
                    
                  
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-briefcase"></i>
                      <p>
                        Entorno
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="/visualizar_bitacora" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Visualizar bitacora</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Backups</p>
                        </a>
                      </li>
                    </ul>
                    
                  
                </li>

{% endblock %}