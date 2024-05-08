#include <stdio.h>
int main() 
{
    float  taka,discount,result;
    scanf("%f%f",&taka,&discount);
    result = taka-(taka*(discount/100));
    printf("Price: %.2f",result);
    
    return 0;
}
