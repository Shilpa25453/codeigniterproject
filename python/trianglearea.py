'''a=int(input("enter the first number"))
b=int(input("enter the second number"))
c=int(input("enter the third number"))
s=(a+b+c)/2
area=(s*(s-a)*(s-b)*(s-c))**0.5
print("the area of the traingle is",area)'''
a=int(input("enter the first number"))
b=int(input("enter the second number"))
c=int(input("enter the third number"))
def area():
    s=(a+b+c)/2
    area=(s*(s-a)*(s-b)*(s-c))**0.5
    print("the area of the triangle is",area)
area()


    

