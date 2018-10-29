
int graph_pair(int s,int t, int lim1,int lim2,int inf)
{
//	//printf("-->gp;");
int f=0,ps,pt,change=0;
//printf("\nwhile((s<=lim1)&&(t<=lim2)&&(t>=temp))");
while((s<=lim1)&&(t<=lim2)&&(t>=temp))
{
//printf("\ns=%d lim=%d t=%d lim2=%d temp=%d   y=%d   x=%d s==y &&t==x  -<",s,lim1,t,lim2,temp,y,x);
//	//printf("-->gp2;");
if(a[s-1][t-1].sym==o)
{//printf("\n bracket 1\n");
if(a[s-1][t-1].v[c][inf]!=-1)
{
	//printf("\n bracket 2\n");
f++;//printf("\n found at x=%d   y=%d  <-----  ",s,t);//printf("f=%d\n",f);
}

}
else
f=0;


if(f==g)
{////printf("reduced f=%d\n",f);
//fflush(stdout);
//sleep(4);

	change++;
    while(f>=1)
        {
              //	//printf("-->gp3;");

        
        switch(inf)
        {
        case 0:s--;
                
                break;
        case 1: t--;
               
                break;
        case 2:s--;t--;
                
                break;
        case 3: s--;t++;
                break;
        }  
        if(f==1)
        {  
		
            f=0;          
switch(inf)
{
case 0:s++;break;
case 1: t++;break;
case 2:s++;t++;break;
case 3: s++;t--;break;
}
 break;
        }
       f--;
       ////printf("minus f=---%d---",f);
        }  
   
}
switch(inf)
{
case 0:s++;break;
case 1: t++;break;
case 2:s++;t++;break;
case 3: s++;t--;break;
}
}
return change;}


int  graph_checkbox(int y,int x,int inf)
{
	//printf("-->checkbox");
int u,d,l,r,i,x1,y1,change,older=a[y-1][x-1].v[c][inf];
//message("graph checkbox");
if((u=y-g+1)<1)
u=1;
if((d=y+g-1)>m)
d=m;
if((l=x-g+1)<1)
l=1;
if((r=x+g-1)>n)
r=n;
temp=l;
i=0;
switch(inf)
{
case 0:change=graph_pair(u,x,d,r,inf);break;
case 1:change=graph_pair(y,l,d,r,inf);i++;break;
case 2:x1=x;y1=y;
while((x1>l)&&(y1>u)&&(i<g))
{x1--;y1--;i++;}
change=graph_pair(y1,x1,d,r,inf);i++;break;
case 3:x1=x;y1=y;
while((x1<r)&&(y1>u)&&(i<g))
{x1++;y1--;i++;}
change=graph_pair(y1,x1,d,r,inf);
break;
}
if(change-older!=0)
{
	          a[y-1][x-1].v[c][inf]=change;
}
return (change-older);
}



void graph_check(int add1,int add2,int inf)
{ 
//printf("-->gcheck");
int found =0,change=0,gx=x-1,gy=y-1;

while((gx+add1)>=0 && (gx+add1)<n && (gy+add2)>=0 && (gy+add2)<m)
{
 if (a[gy+add2][gx+add1].sym==o && (a[gy+add2][gx+add1].v[c][inf]<=0))
{
	
gx=gx+add1	;
gy=gy+add2;
}
else if(a[gy+add2][gx+add1].sym==' ')
{
	found=1;
	break;
}
else
{//another symbol
	break;
}
}

if(found==1)
{
	//printf("--->found");
	a[gy+add2][gx+add1].sym=o;
	change=graph_checkbox(gy+add2+1,gx+add1+1,inf);
a[gy+add2][gx+add1].sym=' ';
gotoxy(1,4*(m+1)+3);
if(a[gy+add2][gx+add1].hi[c]==-1)
{

//printf("-->inserting key %d %d press to disp  ",gy+add2+1,gx+add1+1);
	insertKey(c,(gx+add1)+m*(gy+add2));
	
//display(c);
//getch();
//dish();
fflush(stdout);
}
else if (change!=0)
{
gotoxy(1,4*(m+1)+3);
printf("-->changing key %d %d to %d ",gy+add2+1,gx+add1+1,give_marks(gy+add2,gx+add1,c));
	if(change>0)
	{
gotoxy(1,4*(m+1)+4);
//printf("increasing key press space ");
//getch();


increaseKey(c,a[gy+add2][gx+add1].hi[c]);
//display(c);
fflush(stdout);//sleep(1);////printf("space press");getch();
}
else
{
	gotoxy(1,4*(m+1)+4);
//printf("decreseing key press space ");
//getch();
decreaseKey(c,a[gy+add2][gx+add1].hi[c]);
//display(c); fflush(stdout);//sleep(1);
////printf("space press");getch();
}
}
}
else
{
	////printf("--->not found");
}
}
//    int extractMax();
 
  //  int getmax() { return harr[0]; }

 
 
void graph_sqr(int inf)
{
//////printf("namste\n");
if(inf ==4 || inf ==0 ){
	graph_check(0,+1,0);////printf("namste1");

graph_check(0,-1,0);////printf("namste2");
}
if(inf ==4 || inf ==1 ){
	graph_check(-1,0,1);
////printf("namste3");
graph_check(+1,0,1);////printf("namste3");

}
if(inf ==4 || inf ==2 ){
graph_check(-1,-1,2);////printf("namste5");
graph_check(+1,+1,2);////printf("namste6");
}
if(inf ==4 || inf ==3 ){
graph_check(-1,+1,3);////printf("namste7");
graph_check(+1,-1,3);////printf("namste8");
}
}

