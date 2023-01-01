
from flask import render_template, request, jsonify, redirect, url_for, session, json, flash
from main import app

# SESION
sesion = session

# Mensaje de registro de nota de credito
def message(done):
    msg = '<P style="color: green": red"><b>Gracias estamos procesando tu solicitud, te mandaremos un correo</b></P>'
    if not done:
        msg = '<P style="color: red"><b>Parametro incorrectos intentelo nuevamente</b></P>'
    return msg
        

#--------------------------------------------------------------------------------------------------------------------------------

@app.route('/')
def index():
    return render_template('index_creditos.php')

#--------------------------------------------------------------------------------------------------------------------------------
# FORMULARIO DE CREDITOS
@app.route('/credito_vehicular')
def vehicle_credit():
    return render_template(
        'vehicle_credit.php'
    )

#--------------------------------------------------------------------------------------------------------------------------------

@app.route('/credito_consumo')
def consumer_credit():
    return render_template(
        'consumer_credit.php'
    )


#--------------------------------------------------------------------------------------------------------------------------------
@app.route('/credito_vivienda')
def home_credit():
    return render_template(
        'home_credit.php'
    )

#--------------------------------------------------------------------------------------------------------------------------------

@app.route('/solicitar_credito_vehicular', methods=['POST'])
def request_vehicle_credit():
    
    flash(message(True))
    return redirect(url_for('vehicle_credit'))

#--------------------------------------------------------------------------------------------------------------------------------
    
@app.route('/solicitar_credito_consumo', methods=['POST'])
def request_consumer_credit():
    flash(message(True))

    return redirect(url_for('consumer_credit'))
    
#--------------------------------------------------------------------------------------------------------------------------------
    
@app.route('/solicitar_credito_vivienda', methods=['POST'])
def request_home_credit():
    
    flash(message(True))
    
    return redirect(url_for('home_credit'))
    


#--------------------------------------------------------------------------------------------------------------------------------
# LOGIN

@app.route('/login', methods=['POST'])
def login():
    name = request.form.get('nombre')
    password = request.form.get('contrasenia')
    tipo = 'EJC' # editar para redireccionar // EJC, // ANT, // USR
    return redirect(url_for(f'home_{tipo}'))


#--------------------------------------------------------------------------------------------------------------------------------

@app.route('/home_ejecutivos')
def home_EJC():
    return render_template('home_EJC.php')
  
#--------------------------------------------------------------------------------------------------------------------------------

@app.route('/home_usuario')
def home_USR():
    return render_template('home_USR.php')
#--------------------------------------------------------------------------------------------------------------------------------

@app.route('/gestionar_mis_cuentas')
def gestionar_mis_cuentas():
    return render_template('mi_accounts.php')
  

#--------------------------------------------------------------------------------------------------------------------------------
# gestionar creditos vehiculares
@app.route('/gestionar_creditos_vehiculares')
def manage_vehicle_credits():
    return render_template('manage_vehicle_credits.php')


#--------------------------------------------------------------------------------------------------------------------------------
#Visualizar bitacora
@app.route('/visualizar_bitacora')
def view_log():
    return render_template('view_log.php')
  












