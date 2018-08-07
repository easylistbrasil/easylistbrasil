#!/usr/bin/env python3

with open("easylistbrasil.txt","r") as f, open("easylistbrasil.txt","w") as outfile:
 for i in f.readlines():
       if not i.strip():
           continue
       if i:
           outfile.write(i)   