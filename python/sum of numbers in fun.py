'''def function(a,b):
    sum=a+b
    return(sum)
a=4
b=4
print("the sum is",function(a,b))'''
'''def sum(numbers):
    sum=0
    for i in numbers:
        sum=sum+i
    return sum
print(sum((7,2,3)))'''
def fact(a):
    fact=1
    for i in range(1,a+1):
        fact=fact*i
    return fact
a=int(input("enter a number"))
result=fact(a)
print("the factorial of {} is {}".format(a,result))