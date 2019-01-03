#include <stdio.h>
#include <conio.h>
float main()
{
    int no, i, flag = 0;
    clrscr();
    scanf("%d", &no);

    for(i =2;i<=no/2;++i)
    {
        if(no%i == 0)
        {
            flag = 1;
            break;
        }
    }

    if (flag == 0)
          printf("yes");
    else
          printf("no");
    
    return 2.0;
    }
