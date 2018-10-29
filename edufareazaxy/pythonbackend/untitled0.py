
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
import os
from urllib.request import urlretrieve

directory = "downloaded"
if not os.path.exists(directory):
    os.makedirs(directory)

course=input(" enter course you want to search")

html = urlopen("https://www.edureka.co/search/"+course)
html = urlopen("https://www.edureka.co/search/java")
b.find(div,tilecontainer > div.cardmain > div.coursedetailmain > div.courseprice-datesec > div.coursepricesec > span.discountedprice.course-currency-icon)
print(course)
b=BeautifulSoup(html,'html.parser')
print(b.prettify())



col=b.findAll("div",{"class":"tilecontainer"})

for i in col:
    i=i.prettify()
    print (i)
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
    
    free=0
    duration=0
    cost=0
    weekly_study=""
    website="coursera.com"
    rating=0
    description=""
    
    q1=newx.find("div",{"class":"ratings-text headline-2-text"}).get_text().strip()
    q1=q1.split()
    users= q1[len(q1)-2]
    print("users=",users)
      
      
    q2=newx.find('table',{"class":"basic-info-table bt3-table bt3-table-striped bt3-table-bordered bt3-table-responsive"}).findAll('tr')
    for i in q2:
        j=i.td
        if  ('commitment' in (j.get_text()).lower()): 
            print(j.next_sibling.get_text())
            duration=no(j.next_sibling.get_text()) 
     
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
    print("duration=",duration,"\n rating=",rating,"\nstart date=",start_date,"\ndescription=",description)
    
    try:    
   # Prepare SQL query to INSERT a record into the database.
        sql = "INSERT INTO course(course_name,institute, description, link,tag,duration,website,search,start_date,rating,stud_review) VALUES (%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)"
   # Execute the SQL command
        cursor.execute(sql,(course_name,course_by,course_description,link,tag,duration,website,course,start_date,rating,users))
   # Commit your changes in the database
        connection.commit()
    except:
        print ("error")
   # Rollback in case there is any error
    connection.rollback() 
   #sleep(1)
connection.close()          



    
    
        
        
        
        
        
        
        
        
        
        
        