#include <stdio.h>
void main()
{
 int base, exponent;
 long result ;
 scanf("%d", &base);
 scanf("%d", &exponent);
    if (exponent != 0)
    {
        result *= base;
        --exponent;
    printf(" %d", result);
        
    }
    else
    {
        printf("invalid input");
    }
 getch();
}
