num=int(input("enter the number"))
print(num)
rem=0
temp=num
while(num>0):
    rev=num%10
    rem=rem*10+rev
    num=num//10
print("the reverse number is",rem)