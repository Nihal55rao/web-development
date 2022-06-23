t=int(input())
for i in range(t):
    a,b,c,x,y=map(int,input().split())
    if a+b+c ==0 and x+y == 0:
    	print("YES")
    	continue
    if a+b+c >= x+y:
        if x+y > c:
            if a+c >= x:
                if c+b >= y:
                    print("YES")
                else:
                	print("NO")
            else:
            	print("NO")
        else:
        	print("NO")
    else:
        print("NO")
             
