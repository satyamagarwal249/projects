# -*- coding: utf-8 -*-
"""
Created on Sat Jul  7 23:49:54 2018

@author: Satyam Agarwal
"""


from urllib.request import urlopen


from bs4 import BeautifulSoup

html = urlopen("https://www.coursera.org/courses?query=java")
b=BeautifulSoup(html,'html.parser')
col=b.findAll("div",{"class":"card-info"})
for i in col:
    for j in i.children:
        print (j)
    print( "\n\n")<h2 class="color-primary-text card-title headline-1-text" data-reactid="174">Java Programming and Software Engineering Fundamentals</h2>
<span class="product-badge" data-reactid="175">Specialization</span>
<span class="dot-delimiter" data-reactid="176">·</span>
<span class="card-description text-light body-1-text" data-reactid="177">Duke University</span>




# -*- coding: utf-8 -*-
"""
Created on Sat Jul  7 23:49:54 2018

@author: Satyam Agarwal
"""


from urllib.request import urlopen


from bs4 import BeautifulSoup ,re
course=input(" enter course you want to search")
html = urlopen("https://www.coursera.org/courses?query="+course)

print(course)
b=BeautifulSoup(html,'html.parser')
col=b.findAll("div",{"class":"card-info"})
for i in col:
    print ("name:",i.find("",{"class":re.compile("\.*card-title\.*")}).get_text())
    
    print ("badge:",i.find("",{"class":re.compile("\.*product-badge\.*")}).get_text())
    
   
    print ("description:",i.find("",{"class":re.compile("\.*card-description\.*")}).get_text())
 