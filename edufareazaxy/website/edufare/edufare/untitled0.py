# -*- coding: utf-8 -*-
"""
Created on Sun Jul 22 13:55:09 2018

@author: Satyam Agarwal
"""

import pymysql
conn = pymysql.connect(host='127.0.0.1',user='root', passwd=None, db='mysql')
cur = conn.cursor()
cur.execute("USE edufare")
cur.execute("desc main")
print(cur.fetchone())
cur.close()
conn.close()
import selenium

from selenium import webdriver
import time
driver = webdriver.Chrome(executable_path='file:///C:/webdriver/chromedriver_win32/chromedriver.exe')
driver.get("http://pythonscraping.com/pages/javascript/ajaxDemo.html")
time.sleep(3)
print(driver.find_element_by_id("content").text)

from selenium import webdriver
from selenium.webdriver.chrome.options import Options

options = Options()
options.add_argument("--headless") # Runs Chrome in headless mode.
options.add_argument('--no-sandbox') # Bypass OS security model
options.add_argument('--disable-gpu')  # applicable to windows os only
options.add_argument('start-maximized') # 
options.add_argument('disable-infobars')
options.add_argument("--disable-extensions")
options = Options()
options.set_headless(headless=True)
options = webdriver.ChromeOptions()
options.add_experimental_option("excludeSwitches",["ignore-certificate-errors"])
options.add_argument('--disable-gpu')
options.add_argument('--headless')
chrome_driver_path = "C:\Python27\Scripts\chromedriver.exe"
driver = webdriver.Chrome(chrome_options=options,executable_path='C:/webdriver/chromedriver_win32/chromedriver.exe')
driver.get("http://google.com/")
print ("Headless Chrome Initialized on Windows OS")

driver.close()

from selenium import webdriver
from selenium.webdriver.chrome.options import Options

options = Options()
options.add_argument('--headless')
options.add_argument('--disable-gpu')  # Last I checked this was necessary.
driver = webdriver.Chrome(executable_path='C:/webdriver/chromedriver_win32/chromedriver.exe', chrome_options=options)

import os
from selenium import webdriver


options = webdriver.ChromeOptions()
options.add_experimental_option("excludeSwitches",["ignore-certificate-errors"])
options.add_argument('headless')
options.add_argument('window-size=0x0')
options.add_argument("--test-type")
driver = webdriver.Chrome(executable_path='C:/webdriver/chromedriver_win32/chromedriver.exe')
driver.get("https://www.google.co.in")
time.sleep(3)
print(driver.find_element_by_id("content").text)
driver.close()
























import selenium

from selenium import webdriver
import time
driver = webdriver.PhantomJS(executable_path='C:/webdriver/phantomjs-2.1.1-windows/binphantomjs.exe')
driver.get("http://pythonscraping.com/pages/javascript/ajaxDemo.html")
time.sleep(3)
print(driver.find_element_by_id("content").text)
driver.close()

C:\webdriver\phantomjs-2.1.1-windows\bin


import os
from selenium import webdriver

chromedriver = "/Users/Satyam Agarwal/Downloads/chromedriver"
os.environ["webdriver.chrome.driver"] = chromedriver
driver = webdriver.Chrome(chromedriver)
driver.get("http://stackoverflow.com")
driver.quit()


from selenium import webdriver

# Optional argument : if not specified WebDriver will search your system PATH environment variable for locating the chromedriver
driver = webdriver.Chrome(executable_path=r'C:\path\to\chromedriver.exe')
driver.get('https://www.google.co.in')
print("Page Title is : %s" %driver.title)
driver.quit()
webdriver driver = new ChromeDriver();