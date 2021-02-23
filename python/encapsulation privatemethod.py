'''class car:
    def __init__(self):
        self.__update()
    def drive(self):
        print("driving")
    def __update(self):
        print("update software of car")
blackcar=car()
blackcar.drive()'''
class overloading:
    def display(self,a=None,b=None):
        print(a,b)
obj=overloading()
obj.display()
obj.display(10)
obj.display(10,20)
    
        