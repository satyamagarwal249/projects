

#course=input(" enter course you want to search")

#html = urlopen("https://www.futurelearn.com/search?q="+course)

#print(course)
import threading
def fur():
    for course in ['java','python','piano','jazz','music']:
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
               description=par.find("p").get_text()
               
               new="https://www.futurelearn.com"+par.find("h3").a['href']
               print ("link foR MORE  details :",new)
               link=new
               
               newx=BeautifulSoup( urlopen(new),'html.parser')
               free=-1
               duration=-1
               cost=-1
               weekly_study="-1"
               website="futurelearn.com"
               rating=-1
               users=-1;
           
               
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
               
           lock.acquire()
           try:    
              
               # Prepare SQL query to INSERT a record into the database.
               sql = "INSERT INTO course(course_name,institute, description, link,tag,duration,weekly_study,website,search,start_date,rating,users,category,cost,free) VALUES (%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)"
   # Execute the SQL command
               cursor.execute(sql,(course_name,course_by,description,link,tag,duration,weekly_study,website,course,start_date,rating,users,course,cost,free))
   # Commit your changes in the database
             
               connection.commit()
           except:
               print ("error")
               # Rollback in case there is any error
               connection.rollback() 
           #sleep(1)
           lock.release()