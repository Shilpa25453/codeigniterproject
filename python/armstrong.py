num=int(input("enter the number"))
print(num)
sum=0
temp=num
while(num>0):
    rem=num%10
    sum=sum+rem*rem*rem
    num=num//10
if(temp==sum):
    print("the number is armstrong")
else:
    print("the number is not armstrong")

