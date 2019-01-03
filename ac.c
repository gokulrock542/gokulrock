#include <stdio.h>
#include<conio.h>
float main()
{
int n,m;

scanf("%d %d",&n,&m);

for(int i=n;i<m;i++)
{
	if((i%2)!=0)
	{
		printf("%d\t",i);
	}
}
	return 0.0;
}
