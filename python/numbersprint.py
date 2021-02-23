'''for i in range(0,3):
    for j in range(0,3):
        print(i,j)'''
'''n=int(input("enter the table"))
m=1
for i in range(1,10):
    for j in range(1,10):
        m=i*j
        print("{}*{}={}".format(i,j,m))'''


l=[2,3,4,5,6,7,8,9]
even=[]
odd=[]
for i in range(0,len(l)):
    if(l[i]%2==0):
        even.append(l[i])
    else:
           odd.append(l[i])
print(odd)
print(even)