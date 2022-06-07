from unittest import result


class Fibonacci:
    def calcular(self, numero):
        arr = [0,1]
        if numero==1:
            return arr[0]
        elif numero==2:
            return arr
        else:
            while(len(arr)<numero):
                arr.append(0)
            if(numero==0 or numero==1):
                return 1
            else:
                arr[0]=0
                arr[1]=1
                for i in range(2,numero):
                    arr[i]=arr[i-1]+arr[i-2]
                return arr