# app.py

from flask import Flask, render_template, redirect, url_for
import subprocess

app = Flask(__name__)

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/generate_report', methods=['POST'])
def generate_report():
    # Execute your Python script here
    subprocess.run(['python', 'C:\\xampp\\htdocs\\onlinetourism\\TMS\\report.py'])
    return redirect(url_for('index'))

if __name__ == '__main__':
    app.run(debug=True)
