<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credito de vivienda</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div>
        <!-- Content Header (Page header) -->
        <section class="content-header" style="background-color: #4B4B4B;">
            <div class="container-fluid">
                <div>
                    <div>
                        <h1 style="color: white; margin-left: 710px;">CREDITO DE VIVIENDA</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <!-- Default box -->
     
        <div>
            <div class="card-body row">
                <div class="col-5 text-center d-flex align-items-center justify-content-center">
                    <div class="">
                        <img src="https://th.bing.com/th/id/OIP.sxJ0O5kV6kOZ6D4m0DkoZwHaE7?pid=ImgDet&rs=1" width="110%" style="margin-bottom: 450px;">
                    </div>
                </div>
                <div class="col-7">
                    <div class="form-group">
                        <p style="font-size: 25px;">REQUISITOS</p>
                    </div>
                    <div class="form-group">
                        <ul>
                            {% for requisito in requisitos %}
                                    <li>
                                        {{requisito.1}}
                                    </li>
                                
                            {% endfor %}
                        </ul>
                    </div>
                    <div class="form-group">
                        <p style="font-size: 25px;">BENEFICIOS</p>
                    </div>
                    <div class="form-group">
                        <ul>
                            {% for beneficio in beneficios %}
                                    <li>
                                        {{beneficio.1}}
                                    </li>
                                
                            {% endfor %}
                        </ul>
                    </div>
                    <div class="form-group">
                        <p style="font-size: 25px;">Agendar/Solicitar Credito</p>
                    </div>
                    <form action="/solicitar_credito_vivienda" method="post">
                        {% with messages = get_flashed_messages()  %}
                                {% for message in messages %}
                                        {{ message }}
                                {% endfor %}
                        {% endwith %}
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input type="text" id="nombreh" name="nombre" class="form-control" placeholder="Nombre Completo" style="width: 450px;" />
                        </div>
                        <div class="form-group">
                            <label for="">E-Mail</label>
                            <input type="email" id="correoh" name="correo" class="form-control" placeholder="Correo Electronico" style="width: 450px;" />
                        </div>
                        <div class="form-group">
                            <label for="">Ubicación de vivienda</label>
                            <input type="text" id="ubicacionh" name="ubicacion" class="form-control" placeholder="dirección" style="width: 450px;" />
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="">CI</label>
                                    <input type="text" id="civ" name="ci" class="form-control" placeholder="Numero de Carnet" style="width: 150px;" />
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="">Celular</label>
                                    <input id="celularh" name="celular" class="form-control" placeholder="Numero de telefono" style="width: 150px;"></input>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="">Edad</label>
                                    <input id="edadh" name="edad" class="form-control" placeholder="Edad" style="width: 80px;"></input>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="">Ingresos Mensuales</label>
                                    <input id="ingresoh" name="ingreso" class="form-control" style="width: 150px;" placeholder="Tus ingresos"></input>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="">Monto a Solicitar</label>
                                    <input id="montoh" name="monto" class="form-control" style="width: 150px;" placeholder="Tu monto a solicitar"></input>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group" >
                                    <label for="">Plazo</label>
                                    <input id="plazoh" name="plazo" class="form-control" style="width: 150px;"></input>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="row">
                            
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="">Estado Civil</label>
                                    <select name="estadoci" id="estadociv" class="form-control" style="width: 150px;">
                                        <option value="c">Casado</option>
                                        <option value="s">Soltero</option>
                                    </select>
                                </div>
                            </div>
                        
                        </div>
                        <button class="btn btn-primary" type="submit">SOLICITAR</button>
                            
                    </form>
                    <a href="/"><button class="btn btn-danger" style="margin-left: 200px; margin-top: -66px;">CANCELAR</button></a>
                </div>
            </div>
         
             
           
         
        </div>
        <!-- /.content -->
    </div>
</body>