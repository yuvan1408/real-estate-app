from flask import Flask, render_template

app = Flask(__name__, template_folder='templates')

@app.route('/')                      # 1
def home(): return render_template('home.html')

@app.route('/login')                # 2
def login(): return render_template('login.html')

@app.route('/signup')               # 3
def signup(): return render_template('signup.html')

@app.route('/placeholder')          # 4
def placeholder(): return render_template('placeholder.html')

@app.route('/base')                 # 5
def base_page(): return render_template('base.html')

@app.route('/placelocation')        # 6
def placelocation(): return render_template('placelocation.html')

@app.route('/assurance')            # 7
def assurance(): return render_template('assurance.html')

@app.route('/myproperty')           # 8
def myproperty(): return render_template('myproperty.html')

@app.route('/about')                # 9
def about(): return render_template('about.html')

@app.route('/property')             #10
def property(): return render_template('property.html')

@app.route('/price')                #11
def price(): return render_template('price.html')

@app.route('/reservation')          #12
def reservation(): return render_template('reservation.html')

@app.route('/registration')         #13
def registration(): return render_template('registration.html')

@app.route('/broker')               #14
def broker(): return render_template('broker.html')

@app.route('/landvalue')            #15
def landvalue(): return render_template('landvalue.html')

@app.route('/landview')             #16
def landview(): return render_template('landview.html')

if __name__ == '__main__':
    app.run(debug=True)
