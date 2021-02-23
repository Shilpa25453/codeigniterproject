'''string=input("enter the string:")
word=input("enter the word:")
a=[]
count=0
for i in range(0,len(a)):
    if(word==a[i]):
        count=count+1
print("count of the word is:")
print(count)'''
from abc import ABC
class animal(ABC):
    def move(self):
        pass
        