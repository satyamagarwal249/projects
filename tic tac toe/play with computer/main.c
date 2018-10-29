#include<stdio.h>
#include<conio.h>
#include<malloc.h>
#include<time.h>
#include<stdlib.h>
#include"fun.c"
#include"heap.cpp"
#include"ngraph.c"

void entered(int y,int x,int c)
{
	int i,j;
	for(j=0;j<pl;j++)
{	//printf("delete now for %d",j+1);fflush(stdout);sleep(1);
if(a[y][x].hi[j]!=-1 && a[y][x].hi[j]!=-2 )  //else not inserted in heap yet
{//printf("deleting bcz heap pointer =%d of %d%d node heep of %c\n",a[y][x].hi[j],y+1,x+1,p[j]);	
fflush(stdout);
//sleep(2);
deleteKey(j,a[y][x].hi[j]); //deletion from heap
fflush(stdout);
//getch();
//sleep(2);
}
a[y][x].hi[j]=-2;//filled with another symbol
if(j!=c)
		{
		free(a[y][x].v[j]);
		}
}
}

main()
{
int i,j,r,turn=0,*w,last=0,aim=0,k,marks,max;
char z;
printf("enter no of row m, no of column n");
scanf("%d%d",&m,&n);
x=(n+1)/2;
y=(m+1)/2;

printf("enter no of players");
scanf("%d",&pl);
a=(mat**)malloc(m*sizeof(mat*));
for(i=0;i<m;i++)
a[i]=(mat*)malloc(n*sizeof(mat));
for(i=0;i<m;i++)
for(j=0;j<n;j++)
{
a[i][j].sym=' ';
a[i][j].v=(int **)malloc(pl*sizeof(int*));
a[i][j].hi=(int*)calloc(pl,sizeof(int));
for(k=0;k<pl;k++)
{
a[i][j].v[k]=(int*)calloc(4,sizeof(int));
a[i][j].hi[k]=-1;//empty pointer to heap,i.e. first time of this node entry is to be done in heap 
}
}
p=(char*)malloc(pl*sizeof(char));
w=(int*)calloc(pl,sizeof(int));
capacity=(m*n)*10;
heaps=(int**)calloc(pl,sizeof(int *));
hsize=(int*)calloc(pl,sizeof(int));
for(i=0;i<pl;i++)
{
heaps[i]=(int*)calloc(capacity,sizeof(int));
}
system("cls");
fflush(stdin);
for(i=0;i<pl-1;i++)
{
printf("\nenter player %d symbol",i+1);
scanf("%c",&p[i]);
printf("\n----%c-----",p[i]);
fflush(stdin);
}

printf("\ncomputer  player %d symbol",pl);
printf("\n----c-----");
p[i]='c';
g=m*n;
while((g>m)&&(g>n))
{
printf("enter group size");
scanf("%d",&g);
}
while(aim==0)
{
printf("enter aim");
scanf("%d",&aim);
}
system("cls");
getch();
gotoxy(1,4*(m+1));
for(i=0;i<pl;i++)
printf("%d player symbol is %c\n",i+1,p[i]);
printf("press enter to continue");
getch();
system("cls");
for(i=1;i<=m;i++)
{
for(j=1;j<=6*n+1;j++)
{
printf(".");
}
printf("\n");
for(r=1;r<=3;r++)
{
for(j=1;j<=n+1;j++)
printf(".     ");
printf("\n");
}
}
for(j=1;j<=6*n+1;j++)
{
printf(".");
}
while(turn!=(m*n))
{
if(c==pl-1)//computers turn
{
	//exit(0);
//	sleep(1);
	gotoxy(1,4*(m+1)+1);
	
printf("player%d =computer turn with %c",c+1,p[c]);
	
	fflush(stdout);
//	sleep(2);
	//getch();
	max=0;
	dish();
for(i=0;i<pl;i++)
{
if(hsize[i]!=0)
{
	if(value(max,heaps[max][0])<=value(i,heaps[i][0]))
	max=i;
}
}
y=(int)heaps[max][0]/m+1;
x=heaps[max][0]%n+1;
		gotoxy(1,4*(m+1)+5+pl);
printf("x=%d   y=%d max player=%d ",x,y,max+1);
//sleep(1);
o=p[c];
a[y-1][x-1].sym=o;
 gotoxy(((x*d)-(d/2)+1),(y*e-(e/2)+1));
 
 goto comp;
 
}
o=p[c];
gotoxy(1,4*(m+1)+1);
printf("player%d turn with %c",c+1,p[c]);
 gotoxy(((x*d)-(d/2)+1),(y*e-(e/2)+1));

z=getch();

while(z!=o)
{d:
cursor(z);
z=getch();
}
if(a[y-1][x-1].sym==' ')
 a[y-1][x-1].sym=z;
else
{
goto d;
}
comp:
 gotoxy(((x*d)-(d/2)+1),(y*e-(e/2)+1));

putchar(a[y-1][x-1].sym);

	gotoxy(1,4*(m+1)+1);
printf("enterd func ");
 gotoxy(((x*d)-(d/2)+1),(y*e-(e/2)+1));
//sleep(1);
entered(y-1,x-1,c);

marks=give_marks(y-1,x-1,c);
win=win+marks;
w[c]=w[c]+marks;
turn++;
for(i=0;i<4;i++)
{
	if(a[y-1][x-1].v[c][i]>0)
	{
		
	gotoxy(1,4*(m+1)+1);
printf("check box %d",i);
 gotoxy(((x*d)-(d/2)+1),(y*e-(e/2)+1));
//sleep(1);
checkbox(i);
	}
}

	gotoxy(1,4*(m+1)+1);
printf("graph sqr   ");//sleep(1);
 gotoxy(((x*d)-(d/2)+1),(y*e-(e/2)+1));

graph_sqr(4);//goto position (+1s) not index+++++sent inverted x+1 is column ;after all other are used i.e. -1
	
dish();
x++;
gotoxy(x*d-(d/2)+1,y*e-(e/2)+1);
if(x>n)
{
x=1;y++;
gotoxy((x*d)-(d/2)+1,((y)*e-(e/2))+1);
if(y>m)
{
x=1;y=1;
gotoxy((x*d)-(d/2)+1,(y*e)-(e/2)+1);
}
}


gotoxy(1,4*(m+1));
printf("%d\t",win);
for(i=0;i<pl;i++)
printf("%d\t",w[i]);
if(w[c]>=aim)
goto  x;
c++;
if(c==pl)
c=0;
}
x: 
gotoxy(1,4*(m+1)+2);
printf("game finish\n");
// won by
}
void cursor (char z)
{
x:switch (z)
{
case 'l' : if((x>1))gotoxy(((--x)*d)-(d/2)+1,(y*e)-(e/2)+1);else goto l ;break;
case 'r':if((x<n))gotoxy(((++x)*d)-(d/2)+1,(y*e)-(e/2)+1);else goto l;break;
case 'u':if((y>1))gotoxy((x*d)-(d/2)+1,((--y)*e)-(e/2)+1);else goto l;break;
case 'd':if((y<m))gotoxy((x*d)-(d/2)+1,((++y)*e)-(e/2)+1);else goto l;break;
case 'o':gotoxy(1,4*(m+1)+2);
printf("\33[2Kcannot over-write");
gotoxy((x*d)-(d/2)+1,(y*e)-(e/2)+1);
goto y;
break;
default: l:gotoxy(1,4*(m+1)+2);printf("\33[2K not able to move ;enter valid choich");
gotoxy(((x)*d)-(d/2)+1,(y*e)-(e/2)+1);
goto y;
}
if(a[y-1][x-1].sym!=' ')
{
if(z!='d'||z!='u')
{
goto x;
}
else
{
    if(z=='u')
    {
    y++;
    while((a[y-1][x-1].sym!=' ')&&(y>1))
        {y--;
        for(x=1;(a[y-1][x-1].sym!=' ')&&(x<=n);x++);
        }
        gotoxy((x*d)-(d/2)+1,(y*e)-(e/2)+1);
    }
    
    
    if(z=='d')
    {z--;
    while((a[y-1][x-1].sym!=' ')&&(y<n))
        {y++;
        for(x=1;(a[y-1][x-1].sym!=' ')&&(x<=n);x++);
        }
        gotoxy((x*d)-(d/2)+1,(y*e)-(e/2)+1);
    }   
}
    
}
y:;
}

void checkbox(int inf)
{
int u,d,l,r,i,x1,y1;
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
case 0:pair(u,x,d,r,inf);break;
case 1:pair(y,l,d,r,inf);i++;break;
case 2:x1=x;y1=y;
while((x1>l)&&(y1>u)&&(i<g))
{x1--;y1--;i++;}
pair(y1,x1,d,r,inf);i++;break;
case 3:x1=x;y1=y;
while((x1<r)&&(y1>u)&&(i<g))
{x1++;y1--;i++;}
pair(y1,x1,d,r,inf);
break;
}
}




void pair(int s,int t, int lim1,int lim2,int inf)
{
int f=0,ps,pt,change=0;
while((s<=lim1)&&(t<=lim2)&&(t>=temp))
{
//printf("\ns=%d lim=%d t=%d lim2=%d temp=%d   y=%d   x=%d s==y &&t==x  -<",s,lim1,t,lim2,temp,y,x);
//printf("-->gp2;");
if(a[s-1][t-1].sym==o)
{//printf("\n bracket 1\n");
if(a[s-1][t-1].v[c][inf]!=-1)//??==1
{
	//printf("\n bracket 2\n");
f++;//printf("\n found at x=%d   y=%d  <-----  ",s,t);////printf("f=%d\n",f);
}
else
f=0;

}
else
f=0;
if(f==g)
{//printf("reduced f=%d\n",f);
fflush(stdout);
////sleep(4);
 
    while(f>=1)
        {
              
           
     a[s-1][t-1].v[c][inf]=-1; 
     
         ps=((s)*e)-(e/2)+1;
        pt=((t)*d)-(d/2)+1;
        switch(inf)
        {
        case 0:s--;
                gotoxy(pt,ps-1);
                printf("|");
                gotoxy(pt,ps+1);
                printf("|");
                break;
        case 1: t--;
                gotoxy(pt-1,ps);
                printf("-");
                gotoxy(pt+1,ps);
                printf("-");
                break;
        case 2:s--;t--;
                gotoxy(pt-1,ps-1);
                printf("\\");
                gotoxy(pt+1,ps+1);
                printf("\\");
                break;
        case 3: s--;t++;
                gotoxy(pt-1,ps+1);
                printf("/");
                gotoxy(pt+1,ps-1);
                printf("/");
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
graph_sqr(inf);
            break;
        }
       f--;
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

}
