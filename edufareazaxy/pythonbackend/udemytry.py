# -*- coding: utf-8 -*-
"""
Created on Mon Jul 23 21:08:00 2018

@author: Satyam Agarwal
"""


from urllib.request import urlopen


from bs4 import BeautifulSoup

html = urlopen("https://www.udemy.com")
b=BeautifulSoup(html,'html.parser')
print(b)