from __future__ import division, print_function
# coding=utf-8
import sys
import os
import re

# Flask utils
from flask import Flask, redirect, url_for, request, render_template


# ------------------------------------------------
# IMPORT REQUIRED
# ------------------------------------------------


# ------------------------------------------------
# PREPROCESSING FUCTION DEFINE
# ------------------------------------------------

app = Flask(__name__)

# ------------------------------------------------
# LOAD MODEL
# ------------------------------------------------


print('Model loaded. Start serving...')

print('Model loaded. Check http://127.0.0.1:5000/')


@app.route('/', methods=['GET'])
def index():
    # Main page
    return render_template('index.html')


if __name__ == '__main__':
    app.run(debug=True)
    #
    # Serve the app with gevent
    # http_server = WSGIServer(('0.0.0.0',5000),app)
    # http_server.serve_forever()
