# -*- coding: utf-8 -*-
"""
Created on Sat Jul  7 23:05:33 2018

@author: Satyam Agarwal
"""

from urllib.request import urlopen

from bs4 import BeautifulSoup
html = urlopen("http://www.pythonscraping.com/pages/warandpeace.html")
b=BeautifulSoup(html.read(),'html.parser')

print(b)
green = b.find_all("span",{"class":"green"})
type (green)
for i in green :
    print(i.get_text())