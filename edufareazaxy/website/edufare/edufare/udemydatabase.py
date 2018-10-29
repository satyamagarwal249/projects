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
    
dt = parser.parse("Jun 1 2005  1:33PM")
print(dt.year, dt.month, dt.day,dt.hour, dt.minute, dt.second)
>2005 6 1 13 33 0

       # Prepare SQL query to INSERT a record into the database.
       sql = "INSERT INTO course(course_name) VALUE (%s)"
       # Execute the SQL command
       cursor.execute(sql,course_name)
       # Commit your changes in the database
       connection.commit()



'''
str1=no("as12asdas12")

int(filter(str.isdigit, str))
3158


'''





















        
   
'''
       #
         coll=b.findAll("div",{"class":"m-metadata__item-text"},recursion= False)
   
       
         for j in coll:
            print (j.get_text(),j,"diufgsdif",j.previous_sibling)
            print(j.parent)
       #coll=b.findAll("span",{"class":"a-item-title a-item-title--secondary a-item-title--light"},recursion= False)
       #print(coll)
       
       for ii in coll:
           for j in ii.children:
               print (j)
           print( "\n\n")
'''   



'''

[<div class="a-content a-content--hall a-content--contiguous">
<p class="old-text-typescale u-bold">Begin Programming: Build Your First Mobile Game</p>
<div class="m-button-group m-button-group--horizontal">
<form action="/courses/begin-programming/add-to-wishlist" class="button_to" data-prevent-double-submission="true" method="post" role="form"><input class="a-button a-button--boss" type="submit" value="Add to Wishlist"/><input name="authenticity_token" type="hidden" value="vWf+9KxLa+24GnY70HvYet72czg16moZVZ6jD/ULG/aen4fGqEWBR7i1Ibv46RoU9LqFy/UhBUwefmBWRZzrHA=="/></form>
</div>
</div>, <div class="a-content a-content--hall a-content--contiguous">




<div class="m-metadata__item-text">
<span class="a-item-title a-item-title--secondary a-item-title--light">
Learn
</span>
<span class="m-metadata__content">
Free
</span>
</div>
ss="m-metadata__item-text">
<span class="a-item-title a-item-title--secondary a-item-title--light">
Upgrade
</span>
<span class="m-metadata__content">
$74
</span>


Course
<span class="headline headline-primary u-regular u-no-margin-top">Course</span>

<h3><a class="js-ahoy-track" data-ahoy-event="$click" data-ahoy-event-properties='{"position":1,"query":"piano","path":"/courses/jazz-piano-improvisation","global_id":"gid://future-learn/Course/1513","click-event-name":"search_result_click"}' href="/courses/jazz-piano-improvisation">Learn Jazz Piano: II. Improvising on Jazz Standards</a></h3>

<a href="/partners/goldsmiths-university-london">Goldsmiths, University of London </a>

<p>Explore improvisation in jazz music and further develop your ability to improvise jazz piano.</p>'''