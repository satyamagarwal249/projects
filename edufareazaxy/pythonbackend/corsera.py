# -*- coding: utf-8 -*-
"""
Created on Tue Jul 31 23:29:55 2018

@author: Satyam Agarwal
"""
import threading
def cor():
    directory = "downloaded"
    if not os.path.exists(directory):
        os.makedirs(directory)
    
    #course=input(" enter course you want to search")
    
    for course in ['java','python','piano','ruby','jquery','law']:
        print(course)   
        
        html = urlopen("https://www.coursera.org/courses?query="+course)
        
        print(course)
        b=BeautifulSoup(html,'html.parser')
        
        col=b.findAll("div",{"class":"card-info"})
        cno=0
        
        for i in col:
            try:
              
                course_name=i.find("",{"class":re.compile("\.*card-title\.*")}).get_text()
                print ("name:",course_name)
            #    cno=cno+  1
                link="https://www.coursera.org"+i.find_parent("a" ).attrs['href']
                tag=i.find("",{"class":re.compile("\.*product-badge\.*")}).get_text()
                print ("badge:",tag)
                
                course_by=i.find("",{"class":re.compile("\.*card-description\.*")}).get_text()
                print ("by:",course_by)
                print ("link foR MORE  details :",link)
                if  "course" in tag.lower() :
                    newx=BeautifulSoup(urlopen(link),'html.parser')
                else:
                    continue
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
                lock.acquire()
                try:    
               # Prepare SQL query to INSERT a record into the database.
                    sql = "INSERT INTO course(course_name,institute, description, link,tag,duration,weekly_study,website,search,start_date,rating,users,category,cost,free) VALUES (%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)"
               # Execute the SQL command
                    cursor.execute(sql,(course_name,course_by,description,link,tag,duration,weekly_study,website,course,start_date,rating,users,course,cost,free))
               # Commit your changes in the database
                    connection.commit()
                except:
                    print ("database error")
               # Rollback in case there is any error
                    connection.rollback() 
               #sleep(1)
                lock.release()
            except AttributeError as e:
                print("tag not found")
                continue
             
            
        
        
            
            
            