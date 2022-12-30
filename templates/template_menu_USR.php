{% extends "template_home.php" %}
{% block menu %}
                <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-user"></i>
                      <p>
                        Gestionar mis datos
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/gestionar_notas_de_solicitud" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Editar mis datos</p>
                            </a>
                      </li>
                      <li class="nav-item">
                        <a href="/gestionar_mis_cuentas" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Gestionar mis cuentas</p>
                        </a>
                      </li>
                    </ul>
                </li>

{% endblock %}