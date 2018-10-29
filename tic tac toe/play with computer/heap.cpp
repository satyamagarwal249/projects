    int parent(int i) { return (i-1)/2; }
    int left(int i) { return (2*i + 1); }
	int right(int i) { return (2*i + 2); }
	
	
int value (int c,int key)
{
	int i= key/m,j=key%n;
	return (a[i][j].v[c][0]+a[i][j].v[c][1]+a[i][j].v[c][2]+a[i][j].v[c][3]);
}
void swap(int c,int x, int y)
{
	int temp=a[(int)(heaps[c][x]/m)][heaps[c][x]%n].hi[c];
	a[(int)(heaps[c][x]/m)][heaps[c][x]%n].hi[c]=a[(int)heaps[c][y]/m][heaps[c][y]%n].hi[c];
	a[(int)heaps[c][y]/m][heaps[c][y]%n].hi[c]=temp;
    temp = heaps[c][x];
    heaps[c][x] = heaps[c][y];
    heaps[c][y] = temp;
}
void MaxHeapify(int c,int i)
{
    int l = left(i);
    int r = right(i);
    int max = i;
    if (l < hsize[c] && value(c,heaps[c][l]) > value(c,heaps[c][i]))
        max= l;
    if (r < hsize[c] && value(c,heaps[c][r]) > value(c,heaps[c][max]))
	        max = r;
    if (max != i)
    {
        swap(c,i, max);
        MaxHeapify(c,max);
    }
}
void insertKey(int c,int k)
{
	//printf(" inserted key/n");
	
    if (hsize[c] == capacity)
    {
        printf("\nOverflow: Could not insertKey\n");
        return;
    }
    hsize[c]++;
    int i = hsize[c] - 1;
    heaps[c][i] = k;
    
	a[(int)(k/m)][k%n].hi[c]=i;
    while (i != 0 && value(c,heaps[c][parent(i)]) < value(c,heaps[c][i]))
    {
       swap(c,i,parent(i));
       i = parent(i);
    }
}

void increaseKey(int c,int i)
{
  
    while (i != 0 && value(c,heaps[c][parent(i)])< value(c,heaps[c][i]))
    {
       swap(c,i, parent(i));
       i = parent(i);
    }
}
    void decreaseKey(int c,int i)
{
    MaxHeapify(c,i);
	}
 
   /* int getmax() 
	{
    if (hsize[c] <= 0)
      {
	    printf(" heap is  empty"); 
return -1;
	   }
	   
	 return harr[0]; 
	 }*/
 int extractMax()
{
    if (hsize[c] <= 0)
      {
	    printf(" heap is  empty"); 
return -1;
	   }
    if (hsize[c] == 1)
    {
        hsize[c]--;
        return heaps[c][0];
    }
 
    // Store the maximum value, and remove it from heap
    int root = heaps[c][0];
    heaps[c][0] = heaps[c][hsize[c]-1];
    hsize[c]--;
    MaxHeapify(c,0);
 
    return root;
}
 

void display(int c)
{
    int i;
    if (hsize[c] == 0)
    {
        printf("Heap is empty \n");
        return;
    }
    for (i = 0; i < hsize[c]; i++)
        printf("---%d=>%d ", heaps[c][i],value(c,heaps[c][i]));
    printf("\n");
}
 void deleteKey(int c,int i)
{
//	printf("%dis hsize",hsize[c]);
gotoxy(1,4*(m+1)+2);
		//printf("deleting  index %d  from heap of player %d and %dis hsize press to see",i,c+1,hsize[c]);
//getch();
	fflush(stdout);//sleep(2);
	if(i<hsize[c])
	{
	swap(c,i, hsize[c]-1);
	hsize[c]--;
   MaxHeapify(c,i);

	gotoxy(1,4*(m+1)+2);
		//printf("                                                                             \rafter delete   %d is hsize see dish",hsize[c]);
	  dish();
   }
   else
   {
   printf("beyond heap size for  %d",i);
   	//sleep(2);
   }
}


/*
int main()
{

	  int choice, num,n,i, new_val;
     printf("1.Insert the element \n");
        printf("2.del the element \n");
        printf("3.increase key\n");
        printf("4. decrease key\n");
        printf("5.extract max ()\n");
        printf("6.Display all elements \n");
        printf("7.get max\n");
              printf("8.Quit \n");
        printf("Enter your choice : ");
    while(1)
    {
       
        scanf("%d", &choice);
        switch(choice)
        {
        case 1:
            printf("Enter the element to be inserted to the list : ");
            scanf("%d", &n);
           insertKey(n);
		   break;
        case 2:
            printf("Enter the elements to be deld from the list: ");
            scanf("%d", &n);
           deleteKey(n);
            break;
            
        case 3:
            printf("Enter the index and new increased value");
            scanf("%d%d", &i,&new_val);
            increaseKey(i, new_val);
            break;
            
        case 4:
            printf("Enter the index and new decreased value");
            scanf("%d%d", &i,&new_val);
            decreaseKey(i, new_val);
            break;
       case 5:
            printf("largest val is %d\n",   extractMax());
         
            break;
            
        case 6:
            display();
            break;
        case 7:
           printf("%d",getmax());
            break;
        case 8:
            exit(0);
        default:
            printf("Invalid choice \n");
    }

}
}*/

