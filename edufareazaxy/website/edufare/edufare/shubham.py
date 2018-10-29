# -*- coding: utf-8 -*-
"""
Created on Sun Jul  8 14:31:08 2018

@author: Satyam Agarwal
"""

import bs4
from urllib.request import urlopen as uReq
from bs4 import BeautifulSoup as soup
my_url='https://www.newegg.com/global/in/Product/ProductList.aspx?Submit=ENE&DEPA=0&Order=BESTMATCH&Description=graphics+card&ignorear=0&N=100007709&isNodeId=1'

#open up connection grab and download webpage
uClient=uReq(my_url)
#upload content into a variable
page_html=uClient.read()
#closing internet connection
uClient.close()

#does html parsing
page_soup=soup(page_html,"html.parser")
#page_soup.h1
#page_soup.p

#grabs each product
#find all divisions that have the class item-container
containers=page_soup.findAll("div",{"class":"item-container"})

#will give no. of items in that page  //len(containers)

#container=containers[0]  //will give the html code for zeroth item
# container.div.div.a.img["title"]     //it will granb the imagewe title  //title is an attribute of img tag


#filename="products.csv"
#f=open(filename,"w")
#headers="brand,product_name,shipping\n"
#f.write(headers)

for container in containers:
  brand = container.div.div.a.img["title"]
  title_container=container.findAll("a",{"class":"item-title"})
  product_name=title_container[0].text
  shipping_container=container.findAll("li",{"class":"price-ship"})
  shipping=shipping_container[0].text.strip()
  print("brand " + brand+"\n")
  print("product_name "+ product_name+"\n")
  print("shipping: "+ shipping+"\n")
  print("\n\n")

 # f.write(brand + "," + product_name.replace(",","|") + "," + shipping + "\n") #each row entry in a csv file is terminated by "\n" 

#f.close()
