

from urllib.request import urlopen


html = urlopen("http://pythonscrapindg.com/pages/page1.html")
if html is None:
    print("URL is not found")
else:
#program continues


    print("hello")