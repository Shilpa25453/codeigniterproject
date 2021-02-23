'''n=int(input("enter the size"))
flag=0
for i in range(2,n):
    if (n%i==0):
            flag=1
            break
if(flag==0):
            print(n,"is prime")
else:
            print(n,"is not prime")'''
p=int(input("enter the upper limit"))
q=int(input("enter the lower limit"))
print("the prime numbers are")
for i in range(p,q):
    for j in range(2,i):
        if(i%j==0):
            break
    else:
        print(i)
    
    


        