from urllib.request import urlopen
from bs4 import BeautifulSoup ,re
import pymysql 
from dateutil import parser
from datetime import datetime
import os
from urllib.request import urlretrieve

import time
import threading
lock = threading.Lock()
def no(strg):
   # return int(''.join(filter(str.isdigit, strg)))
   return re.findall(r"[-+]?\d*\.\d+|\d+", strg)[0]

import corsera
import future

try:
    connection = pymysql.connect(host='localhost',
                             user='root',
                             password='',
                             db='edufare',
                             charset='utf8mb4',
                             cursorclass=pymysql.cursors.DictCursor)

except:
    print("ERROR")
   
# prepare a cursor object using cursor() method
cursor = connection.cursor()



t1=threading.Thread(target=cor,args=())
t1.start()
t2=threading.Thread(target=fur,args=())
t2.start()
t1.join()
t2.join()
  


connection.close() 