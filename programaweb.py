from flask import Flask, render_template

App=Flask(__name__, template_folder='../TEMPLATES')

@App.route('/')
def princiapl():
    return render_template('presentacion.html')

@App.route('/Paquetes')
def paquetes():
    return render_template('areas.php')

@App.route('/Contacto')
def contacto():
    return render_template('contacto.html')

@App.route('/Inicio')
def inicio():
    return render_template('Inicio.html')

if __name__ == '__main__':
    App.run(host="0.0.0.0", port=5000, debug=True,)