


# -*- coding: utf-8 -*-
"""
Created on Sat Jul  7 23:49:54 2018

@author: Satyam Agarwal
"""
from urllib.request import urlopen
from bs4 import BeautifulSoup ,re
import pymysql 
from dateutil import parser
from datetime import datetime
def no(strg):
   # return int(''.join(filter(str.isdigit, strg)))
   return re.findall(r"[-+]?\d*\.\d+|\d+", strg)[0]
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
import os
from urllib.request import urlretrieve

directory = "downloaded"
if not os.path.exists(directory):
    os.makedirs(directory)

course=input(" enter course you want to search")

html = urlopen("https://www.coursera.org/courses?query="+course)

print(course)
b=BeautifulSoup(html,'html.parser')
col=b.findAll("div",{"class":"card-info"})
cno=0

for i in col:
    course_name=i.find("",{"class":re.compile("\.*card-title\.*")}).get_text()
    print ("name:",course_name)
#    cno=cno+  1
    link="https://www.coursera.org"+i.find_parent("a" ).attrs['href']
    tag=i.find("",{"class":re.compile("\.*product-badge\.*")}).get_text()
    print ("badge:",tag)
    
    course_by=i.find("",{"class":re.compile("\.*card-description\.*")}).get_text()
    print ("by:",course_by)
    print ("link foR MORE  details :",link)
    if tag.lower() == "course":
        newx=BeautifulSoup(urlopen(link),'html.parser')
    
        free=-1
        duration=-1
        cost=-1
        weekly_study="-1"
        website="coursera.com"
        rating=-1
        description="-1"
        
        q1=newx.find("div",{"class":"ratings-text headline-2-text"}).get_text().strip()
        q1=q1.split()
        users= q1[len(q1)-2]
        print("users=",users)
          
          
        q2=newx.find('table',{"class":"basic-info-table bt3-table bt3-table-striped bt3-table-bordered bt3-table-responsive"}).findAll('tr')
        for i in q2:
            j=i.td
            if  ('commitment' in (j.get_text()).lower()): 
                print(j.next_sibling.get_text())
                weekly_study=no(j.next_sibling.get_text()) 
         
            elif  ('rating' in (j.get_text()).lower()): 
                rating=no(j.next_sibling.get_text().lower()) 
            elif  ('pass' in (j.get_text()).lower()): 
                description=j.next_sibling.get_text().lower()
          
            
           #print("\n\n",course_name,course_by,course_description,link,tag,free,weekly_study,cost,duration,"\n\n")
            try:
                start_date=newx.find("div",{"id":"start-date-string"}).get_text().strip()+' 2018'
                start_date=start_date.replace("Starts","")
                start_date=dt = parser.parse(start_date)
            except:
                start_date=0
        print("duration=",duration,"\nweekly_study=",weekly_study,"\n rating=",rating,"\nstart date=",start_date,"\ndescription=",description)
        
        try:    
       # Prepare SQL query to INSERT a record into the database.
            sql = "INSERT INTO course(course_name,institute, description, link,tag,duration,weekly_study,website,search,start_date,rating,users,category,cost,free) VALUES (%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)"
       # Execute the SQL command
            cursor.execute(sql,(course_name,course_by,description,link,tag,duration,weekly_study,website,course,start_date,rating,users,course,cost,free))
       # Commit your changes in the database
            connection.commit()
        except Exception as  e:
            print (e)
       # Rollback in case there is any error
        connection.rollback() 
   #sleep(1)
connection.close()          
#soup.select("p:nth-of-type(3)")

#len(newx.select('div.rc-TogglableContent.syllabus.collapsed > div.content > div:nth-of-type(1)'))

    
    
        
        
        <button data-track="true" data-track-app="discovery" data-track-page="phoenix_cdp" data-track-action="click" data-track-component="expand_syllabus" class="toggle-button cdp-view-all-button passive" aria-hidden="false" tabindex="false">View Full Syllabus</button>
        
        
        div.rc-TogglableContent.syllabus.collapsed > div.content > div:first-child
        
        
        
        
        
        
        
        
        '''
       
       print (j.get_data())
        for j in q2[i].td:
           print( j)
        print(q2[1][0],"\n")
        print (re.sub('\n+',"" ,q1[i].get_text()), ":", re.sub('\n+',"" ,q2[i].get_text()))

    
    
    
    
    
<tr data-reactid="190"><td data-reactid="191">
<i aria-hidden="true" class="cif-check-list" 
data-reactid="192"></i><span class="td-title" data-reactid="193">L
evel</span></td><td class="td-data" data-reactid="194">Beginner</td></tr>
    '''
    
    
    
    
    ''' loc=i.parent.find("img",recursion=False).attrs['src']
    
    limg=loc[0:loc.rfind('?')]
   #loc[loc.rfind('.'):]
    urlretrieve (loc, directory+"/"+str(cno)+str(limg[limg.rfind('.'):]))
    '''
