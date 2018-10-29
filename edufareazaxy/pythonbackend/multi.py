# -*- coding: utf-8 -*-
"""
Created on Wed Aug  1 00:24:08 2018

@author: Satyam Agarwal
"""

# -*- coding: utf-8 -*-
"""
Created on Sun Jul 29 15:33:30 2018

@author: DELL
"""

import time
import threading
    
def print1():
    for i in range(1,10):
        time.sleep(1)
        print(i,"hello from print1")

def print2():
    for i in range(1,10):
        time.sleep(1)
        print(i,"fello from print2") 

t1=threading.Thread(target=print1,args=())
t1.start()
t2=threading.Thread(target=print2,args=())
t2.start()
t1.join()
t2.join()
  


def sa():
    print("asdlahsd")
    
      
    