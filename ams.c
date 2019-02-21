#include <stdio.h>
float main()
{
    int num,o,r,result = 0;
    printf("input:");
    scanf("%d", &num);
    o = num;
while (o!= 0)
{
  r = o%10;
  result += r*r*r;
  o= o/10;
}
 printf("output:");
 if(result == num)
     printf("yes");
 else
     printf("no");
    return 0;
}
