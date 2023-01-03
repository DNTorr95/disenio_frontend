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
                            <a href="/home_usuario" class="nav-link">
                            <i class="fas fa-file-invoice"></i>
                            <p>Mis datos personales</p>
                            </a>
                      </li>
                      <li class="nav-item">
                        <a href="/gestionar_mis_cuentas" class="nav-link">
                            <i class="fas fa-file-invoice-dollar"></i>
                            <p>Gestionar mis cuentas</p>
                        </a>
                      </li>
                    </ul>
                </li>

{% endblock %}