# -*- coding: utf-8 -*-
"""
Created on Sat Jul  7 23:25:45 2018

@author: Satyam Agarwal
"""

from urllib.request import urlopen

from bs4 import BeautifulSoup , re
html = urlopen("http://www.pythonscraping.com/pages/page3.html")
b=BeautifulSoup(html,'html.parser')


for child in b.find("table",{"id":"giftList"}).children:
    print(child)
    
print("888888888888888888888888888888888888888888888888888888888888888888888888888888")

for child in b.find("table",{"id":"giftList"}).descendants:
    print(child)
    
print ("1111111111111111111111111111111111111111111111")    
    
for sibling in b.find("table",{"id":"giftList"}).tr.next_siblings:
    print(sibling)    

print ("1111111111111111111111111111111111111111111111")    
    
for sibling in b.find("table",{"id":"giftList"}).tr:
    print(sibling)  
      
print(b.find("img",{"src":"../img/gifts/img1.jpg"}).parent.previous_sibling.get_text())

images = b.findAll("img", {"src":re.compile("\.\.\/img\/gifts\/img.*\.jpg")})
for image in images:
    print(image["src"])
    print(image.attrs["src"])
    print(image["src"])
    
b.findAll(lambda tag: len(tag.attrs) == 2)