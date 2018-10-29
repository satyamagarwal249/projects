# -*- coding: utf-8 -*-
"""
Created on Wed Aug  1 00:21:23 2018

@author: Satyam Agarwal
"""

from urllib.request import urlopen
from bs4 import BeautifulSoup ,re
import pymysql 
from dateutil import parser
from datetime import datetime
def no(strg):
    return int(''.join(filter(str.isdigit, strg)))
no("asudf12sda12")
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

#course=input(" enter course you want to search")

#html = urlopen("https://www.futurelearn.com/search?q="+course)

#print(course)
for course in ['java','python','piano']:
    print(course)   
    
    html = urlopen("https://www.futurelearn.com/search?q="+course)
    #print(course)
    b=BeautifulSoup(html,'html.parser')
    
    #print(b.prettify)
    col=b.findAll("",{"class":"headline headline-primary u-regular u-no-margin-top"})
    for i in col:
       if(i.get_text().lower() == "course"):
           print (i.get_text())
           #tag=i.get_text()
           tag="course"
           par=i.parent
               
           print ("course name=",par.find("h3").get_text())
           course_name=par.find("h3").get_text()
           
           print ("course by=",par.find("a", recursive=False).get_text())
           course_by=par.find("a", recursive=False).get_text()
           
           print ("course description=",par.find("p").get_text())
           course_description=par.find("p").get_text()
           
           new="https://www.futurelearn.com"+par.find("h3").a['href']
           print ("link foR MORE  details :",new)
           link=new
           
           newx=BeautifulSoup( urlopen(new),'html.parser')
           free=0
           duration=0
           cost=0
           weekly_study=""
           website="futurelearn.com"
           
           q1=newx.findAll("span",{"class":"a-item-title a-item-title--secondary a-item-title--light"},recursion= False)
           q2=newx.findAll("span",{"class":"m-metadata__content"},recursion= False)
           for i in range(0,len(q1)):
               if  ('learn' in (q1[i].get_text()).lower() and 'free' in q2[i].get_text().lower()) :
                   free=1
               if 'duration'in  ( (q1[i].get_text()).lower() ) :
                   duration=no(q2[i].get_text().lower())
    
               
               if 'upgrade' in (q1[i].get_text()).lower().strip()  :
                   cost=no(q2[i].get_text().lower())
                   
               if 'weekly study' in  ( (q1[i].get_text()).lower()) :
                   weekly_study=q2[i].get_text().lower().strip()
                
               print (re.sub('\n+',"" ,q1[i].get_text()), ":", re.sub('\n+',"" ,q2[i].get_text()))
           #print("\n\n",course_name,course_by,course_description,link,tag,free,weekly_study,cost,duration,"\n\n")
           try:
               start_date=dt = parser.parse(newx.find("time",{"itemprop":"startDate"}).get_text())
           except:
               start_date=0
           
    
       try:    
           # Prepare SQL query to INSERT a record into the database.
           sql = "INSERT INTO course(course_name,institute, description, link,tag,free,weekly_study,cost,duration,website,search,start_date) VALUES (%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)"
           # Execute the SQL command
           cursor.execute(sql,(course_name,course_by,course_description,link,tag,free,weekly_study,cost,duration,website,course,start_date))
           # Commit your changes in the database
           connection.commit()
       except:
           print ("error")
           # Rollback in case there is any error
           connection.rollback() 
       #sleep(1)
connection.close()   
    