def swap(x,y):
    temp=x
    x=y
    y=temp
    print("after swap x={} and y={}".format(x,y))
x=int(input("enter thr first number"))
y=int(input("enter the second number"))
print("before swap x={} and y={}".format(x,y))
swap(x,y)