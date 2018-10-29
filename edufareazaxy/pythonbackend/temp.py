from urllib.request import urlopen

from urllib.error import  HTTPError , URLError 
try:
    html = urlopen("http://pythonscraping.com/pages/page1.html")
except (HTTPError ,URLError) as e:
    print("hello",e)
else:
    from bs4 import BeautifulSoup
    b=BeautifulSoup(html.read(),'html.parser')
    try:
        badContent = b.center.div
    except AttributeError as e:
        print("Tag was not found")
    else:
  
        if badContent == None:
            print ("Tag was not found")
        else:
            print(badContent)

print("hello")