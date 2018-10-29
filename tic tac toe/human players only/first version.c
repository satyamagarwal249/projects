#include<stdio.h>
#include<conio.h>
#include<malloc.h>
#include<time.h>
#include<stdlib.h>
#include<windows.h>
void gotoxy(int aa, int bb)
{
    COORD cc = { aa, bb };  
    SetConsoleCursorPosition(  GetStdHandle(STD_OUTPUT_HANDLE) , cc);
}

struct matrix
{
    char sym;
    int v[4];
};
typedef struct matrix mat;

int m,n,c=0,g,x,y,temp,win,d=6,e=4,pl;
char *p;
char o;
void disp(mat **a);
void cursor(char z,mat **a);
void checkbox(mat **a);
void pair(mat **a,int s,int t, int lim1,int lim2,int inf);

main()
{

int i,j,r,turn=0,*w,last=0,aim=0,k;
mat **a;
char z;
printf("enter no of row m, no of column n");
scanf("%d%d",&m,&n);
x=(n+1)/2;
y=(m+1)/2;
a=(mat**)malloc(m*sizeof(mat*));
for(i=0;i<m;i++)
a[i]=(mat*)malloc(n*sizeof(mat));
for(i=0;i<m;i++)
for(j=0;j<n;j++)
{
a[i][j].sym=' ';
for(k=0;k<4;k++)
{a[i][j].v[k]=0;
}}
printf("enter no of players");
scanf("%d",&pl);
p=(char*)malloc(pl*sizeof(char));
w=(int*)calloc(pl,sizeof(int));
system("cls");fflush(stdin);
for(i=0;i<pl;i++)
{
printf("enter player %d symbol",i+1);
scanf("%c",&p[i]);
printf("\n----%c-----",p[i]);
fflush(stdin);}
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
printf(".");}
printf("\n");
for(r=1;r<=3;r++)
{
for(j=1;j<=n+1;j++)
printf(".     ");
printf("\n");}
}
for(j=1;j<=6*n+1;j++)
{
printf(".");}


while(turn!=(m*n))
{
if(c==pl)
c=0;
o=p[c];
gotoxy(1,4*(m+1)+1);
printf("player%d turn with %c",c+1,p[c]);
 gotoxy(((x*d)-(d/2)+1),(y*e-(e/2)+1));
z=getch();
while(z!=o)
{d:
cursor(z,a);
z=getch();
}
if(a[y-1][x-1].sym==' ')
 a[y-1][x-1].sym=z;
else
{
goto d;
}
putchar(a[y-1][x-1].sym);
turn++;
checkbox(a);
x++;
gotoxy(x*d-(d/2)+1,y*e-(e/2)+1);
if(x>n)
{
x=1;y++;
gotoxy((x*d)-(d/2)+1,((y)*e-(e/2))+1);
if(y>m)
{x=1;y=1;
gotoxy((x*d)-(d/2)+1,(y*e)-(e/2)+1);
}}
w[c]=w[c]+win-last;
last=win;
gotoxy(1,4*(m+1));
printf("%d\t",win);
for(i=0;i<pl;i++)
printf("%d\t",w[i]);if(w[c]>=aim)
goto  x;
c++;
}
x: 
gotoxy(1,4*(m+1)+2);
printf("game finish\n");
// won by
}
void cursor (char z,mat **a)
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
void checkbox(mat **a)
{int u,d,l,r,inf=0,i,x1,y1;
if((u=y-g+1)<1)
u=1;
if((d=y+g-1)>m)
d=m;
if((l=x-g+1)<1)
l=1;
if((r=x+g-1)>n)
r=n;
temp=l;
while(inf<4)
{
i=0;
switch(inf)
{
case 0:pair(a,u,x,d,r,inf);break;
case 1:pair(a,y,l,d,r,inf);i++;break;
case 2:x1=x;y1=y;
while((x1>l)&&(y1>u))
{x1--;y1--;}
pair(a,y1,x1,d,r,inf);i++;break;
case 3:x1=x;y1=y;
while((x1<r)&&(y1>u))
{x1++;y1--;}
pair(a,y1,x1,d,r,inf);
break;
}
inf++;
}}
//checking pair
void pair(mat **a,int s,int t, int lim1,int lim2,int inf)
{int f=0,ps,pt;
while((s<=lim1)&&(t<=lim2)&&(t>=temp))
{
if(a[s-1][t-1].sym==o)
{if(a[s-1][t-1].v[inf]==0)
f++;}
else
f=0;
if(f==g)
{
    win++;

    while(f>=1)
        {
          
            a[s-1][t-1].v[inf]=1;
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
}}

