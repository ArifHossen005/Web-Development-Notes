#include <stdio.h>

int main() {
    int w,b,f,c=0;
    scanf("%d%d%d",&w,&b,&f);
    c=w/4;

    if(c>b)
    {
        c=b;
    }
    else if(c>f/2)
    {
        c=f/2;
    }
    printf("%d",c);
    
    return 0;
}