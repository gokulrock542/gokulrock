#include <stdio.h>
int main()
{
    char c;
    scanf("%c",&c);

    if( (c>='a' && c<='z') || (c>='A' && c<='Z'))
        printf("alphabet");
    else
        printf("no");

    return 0;
    getch();
}
