#include <stdio.h>
#include <math.h>
void main()
{
     int a, d, n, i, tn;
     int sum = 0;
     scanf("%d", &n);
     scanf("%d", &a);
     scanf("%d", &d);
     sum = (n * (2 * a + (n - 1)* d ))/ 2;  //3*(2*1+(3-1)*1))/2=6
     tn = a + (n - 1) * d;      //1+(3-1)*1=3
     for (i = a; i <= tn; i = i + d )
     {
          if (i != tn)
               printf("%d + ", i);
          else
               printf("%d=%d",i, sum);
     }
    getch();
}
