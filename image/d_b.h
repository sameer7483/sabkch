void d_b(int n)
{
	int i=0;
	int a[20];
	
	while(n!=0)
	{
		a[i]=n%2;
		n=n/2;
		i++;
	}
	*(a+i)='\0';
	i--;
	
	printf("\n Binary of the number is: ");
	while(i>=0)
	{
		printf("%d",a[i]);	
		i--;
	}
	
}
