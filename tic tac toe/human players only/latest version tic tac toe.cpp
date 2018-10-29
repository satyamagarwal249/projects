#include<stdio.h>
#include<conio.h>
#include<malloc.h>
#include<time.h>
#include<stdlib.h>
#include<string.h>
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
FILE *fp;
char fn[10]="";
int fs=1;
time_t now,ti;
struct tm *clk;
typedef struct matrix mat;
mat **a;
struct recpl
{
    char sign;
    char name[10];
    int w;
};
typedef struct recpl plp;
plp *p;
int m,n,c=0,g,x,y,temp,turn=0,win,d=6,e=4,pl,*w,last=0,aim=0;
char o,str[7];
void rando()
{
plp temp;
int i=0,k,l,j=rand()%(m*n)+1;
while(i!=j)
{
k=rand()%pl;
l=rand()%pl;
temp=p[k];
p[k]=p[l];
p[l]=temp;
i++;
}
}
void disp(int aim)
{
int i;
for(i=0;i<pl;i++)
printf("player %d\t%c\t%s\t score %d\n",i+1,p[i].sign,p[i].name,p[i].w);
printf("\ngroup size =%d\n aim=%d",g,aim);
}
int cmp(const void *a,const void *b)
{
return(((plp*)b)->w-((plp*)a)->w);
}
void cursor(char z);
void checkbox();
void pair(int s,int t, int lim1,int lim2,int inf);
void tim()
{
now=time(0)-ti;
clk=gmtime(&now);
gotoxy(45,4);
strftime(str,7,"%M:%S",clk);
printf("%s",str);
 gotoxy(((x*d)-(d/2)+1),(y*e-(e/2)+1));
}
void score()
{int i;
gotoxy(1,4*(m+1));
printf("                                                                 \r%d\t",win);
for(i=0;i<pl;i++)
printf("%d\t",p[i].w);
printf("\n                                                                 \rplayer%d turn  %s with %c",c+1,p[c].name,p[c].sign);
o=p[c].sign;
 gotoxy(((x*d)-(d/2)+1),(y*e-(e/2)+1));
}
void inc(int *s,int *t,int inf,int l)
{switch(inf)
{
case 0:(*s)+=l;break;
case 1:(* t)+=l;break;
case 2:(*s)+=l;(*t)+=l;break;
case 3: (*s)+=l;(*t)-=l;break;
}}
void printer(int s,int t,int in, char aa,char bb,char cc,char dd)
         {
int pss,ptt;
pss=((s)*e)-(e/2)+1;
        ptt=((t)*d)-(d/2)+1;
        switch(in)
        {
        case 0:
                gotoxy(ptt,pss-1);
                printf("%c",aa);
                gotoxy(ptt,pss+1);
                printf("%c",aa);
                break;
        case 1:
                gotoxy(ptt-1,pss);
                printf("%c",bb);
                gotoxy(ptt+1,pss);
                printf("%c",bb);
                break;
        case 2:
                gotoxy(ptt-1,pss-1);
                printf("%c",cc);
                gotoxy(ptt+1,pss+1);
                printf("%c",cc);
                break;
        case 3:
                gotoxy(ptt-1,pss+1);
                printf("%c",dd);
                gotoxy(ptt+1,pss-1);
                printf("%c",dd);
                break;
        }
}
struct twoway
{
char uusymbol;
int uux,uuy;
int uuinf;
struct twoway *pre,*next;
};
typedef struct twoway unre;
unre *top=0 ,*ss=0,*start=0;

void fr()
{
unre *tempo,*tt;
int f=0;
if(top==0)
{
if(ss==0)
return;
else 
top=ss;
f=1;
}
tempo=top->next;
top->next=0;
while(tempo!=0)
{tt=tempo->next;
free(tempo);
tempo=tt;
}
if(f==1)
{
free(top);
top=0;
}
ss=0;
}
void undo()
{int x,y,s,t,uinf;
if(top==0)
{
gotoxy(1,4*(m+1)+2);
printf("                                                                  \r max undo already");
return;
}
c--;
if(c==-1)
c=pl-1;
 x=top->uux;
y=top->uuy;
uinf=top->uuinf;
 a[y-1][x-1].sym=' ';
p[c].w=p[c].w-uinf;
win=win-uinf;
last=win;
score();
gotoxy(((x*d)-(d/2)+1),(y*e-(e/2)+1));
putchar(a[y-1][x-1].sym);

if(top->pre==0)
{ss=top;
top=0;
turn--;
return;
}
top=top->pre;

while((top->uusymbol==' '))
{
s=top->uux;
t=top->uuy;
uinf=top->uuinf;
            a[s-1][t-1].v[uinf]=0;
     printer(s,t,uinf,' ',' ',' ',' ');
if(top->pre==0)
{ss=top;
top=0;
turn--;
return;
}
top=top->pre;
}
turn--;
}
void insert(char usymbol,int ux,int uy,int uinf)
{
unre *nw;
nw=(unre *)malloc(sizeof(unre));
if(nw==0)
{gotoxy(1,4*(m+1)+2);
printf("                                                                 \r overflow");
return;
}
nw->uusymbol=usymbol;
nw->uux=ux;
nw->uuy=uy;
nw->uuinf=uinf;
nw->next=0;
nw->pre=0;
if(top==0)
{
start=top=nw;
}
else
{
top->next=nw;
nw->pre=top;
top=nw;
}
}
void redo( )
{
int x,y,s,t,uinf;
if(top==0)
{
if(ss==0)
{gotoxy(1,4*(m+1)+2);
printf("                                                                  \r nothing in move");
return ;
}
else
top=ss;
}
else if(top->next==0)
{gotoxy(1,4*(m+1)+2);
printf("                                                                  \r max redo already");
return ;
}
else
{
top=top->next;
}
while(top->uusymbol==' ')
{
s=top->uux;
t=top->uuy;
uinf=top->uuinf;
            a[s-1][t-1].v[uinf]=1;
     printer(s,t,uinf,'|','-','\\','/');
top=top->next;
}
 x=top->uux;
y=top->uuy;
 a[y-1][x-1].sym=top->uusymbol;
uinf=top->uuinf;
p[c].w=p[c].w+uinf;
win=win+uinf;
last=win;
c++;
if(c==pl)
c=0;
score();
gotoxy(((x*d)-(d/2)+1),(y*e-(e/2)+1));
putchar(a[y-1][x-1].sym);
turn++;
}
main()
{
int i,j,r,t,k,pp=0;
char z;
printf(" want to open saves game press y");
if(getch()=='y')
{
char usymbol;
int ux,uy,uinf;
    printf(" eneter file name");
gets(fn);
strcat(fn,".txt");
if((fp=fopen(fn,"r"))==NULL)
{
    printf("eror opening file");
    exit(0);
}
fscanf(fp,"%d%d%d%d%d",&m,&n,&pl,&g,&aim);
printf("m=%d,n=%d,pl=%d,g=%d,aim=%d\n",m,n,pl,g,aim);p=(plp*)calloc(pl,sizeof(plp));
fflush(stdout);
//sleep(2);
//fread(p,sizeof(plp),pl,fp);
while(pp<pl)
{ fscanf(fp,"%c%s%d",&p[pp].sign,p[pp].name,&p[pp].w);
pp++;
}
disp(aim);
fflush(stdout);
getch();
//sleep(2);
while(!feof(fp))
{
    fscanf(fp,"%c%d%d%d",&usymbol,&ux,&uy,&uinf);
insert(usymbol,ux,uy,uinf);
}
fclose(fp);
goto www;
}
printf("\nenter no of row m, no of column n");
scanf("%d%d",&m,&n);

printf("enter no of players");
scanf("%d",&pl);
p=(plp*)calloc(pl,sizeof(plp));
system("cls");
fflush(stdin);
getch();
for(i=0;i<pl;i++)
{
printf("\nenter player %d symbol:\t",i+1);
p[i].sign=getche();
printf("\nenter player %d name:\t",i+1);
gets(p[i].name);
fflush(stdin);
}
srand(time(0));
rando();
g=m*n;
while((g>m)&&(g>n))
{
printf("\nenter group size");
scanf("%d",&g);
}
while(aim==0)
{
printf("\nenter aim");
scanf("%d",&aim);
}
////////sleep(1);
system("cls");
disp(aim);fflush(stdout);
//sleep(4);
//mistake
system("cls");
gotoxy(18,15);
printf("Loading.....");
gotoxy(18,16);
for(i=1;i<=7;i++)
{
//sleep(1);
printf("*");
fflush(stdout);
}
fflush(stdin);
printf("\nwelcome to SATYAM's game.....press enter");
getchar();


www:
time(&ti);
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
    disp(aim);
fflush(stdout);
//sleep(6);
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
gotoxy(45,5);
printf("group=%d",g);
tim();
score();
ss=start;
start=top;
top=0;

while(top!=start)
{
redo();
}
start=ss;
ss=0;
gotoxy(((x)*d)-(d/2)+1,(y*e)-(e/2)+1);
while(turn!=(m*n))
{
z=getch();
while(z!=o)
{d:tim();
cursor(z);
z=getch();
}
if(a[y-1][x-1].sym==' ')
 a[y-1][x-1].sym=z;
else
{
goto d;
}
 fr();
tim();
putchar(a[y-1][x-1].sym);
turn++;
checkbox();
insert(z,x,y,win-last);
cursor('h');
p[c].w=p[c].w+win-last;
last=win;
if(p[c].w>=aim)
{score();
goto  x;}
c++;
if(c==pl)
c=0;
score();
}
gotoxy(1,4*(m+1)+1);
printf("                                                                 \r matrix full");
x: 
gotoxy(1,4*(m+1)+2);
printf("                                                                 \r game finish\n");
printf("                                                                 \r total time is %d seconds",(int)difftime(time(0),ti));
//sleep(2);
system("cls");
printf("scores are \n");
qsort(p,pl,sizeof(plp),cmp);
disp(aim);
}
void cursor (char z)
{int i,j;int pp=0;
char cmp[20];

x:switch (z)
{
case 'l' : if((x>1))gotoxy(((--x)*d)-(d/2)+1,(y*e)-(e/2)+1);else goto nn;break;
case 'r':if((x<n))gotoxy(((++x)*d)-(d/2)+1,(y*e)-(e/2)+1);else goto mm;break;
case 'u':if((y>1))gotoxy((x*d)-(d/2)+1,((--y)*e)-(e/2)+1);else goto l;break;
case 'd':if((y<m))
gotoxy((x*d)-(d/2)+1,((++y)*e)-(e/2)+1);
else goto l;break;
case 'b': undo();
gotoxy(((x)*d)-(d/2)+1,(y*e)-(e/2)+1);
break;
case 'f':redo();
gotoxy(((x)*d)-(d/2)+1,(y*e)-(e/2)+1);
break;

case 'g' : gotoxy(1,4*(m+1)+2);
printf("                                                                 \renter group size");
scanf("%d",&g);
getch();
gotoxy(45,5);
printf("group=%d",g);
gotoxy((x*d)-(d/2)+1,(y*e)-(e/2)+1);
goto yy;

case 'h':
mm : i=x;j=y; 
while(1)
{
if(x>=n)
{
x=0;
if(y==m)
y=1;
else
y++;
}
x++;
for(  ; x<=n;x++)
{
if((x==i)&&(y==j))
{gotoxy(((x)*d)-(d/2)+1,(y*e)-(e/2)+1);
goto yy;}
if(a[y-1][x-1].sym==' ')
{
gotoxy(((x)*d)-(d/2)+1,(y*e)-(e/2)+1);
goto yy;
}}}


case 's':printf(" ending");
getch();
fflush(stdin);
if(fn[0]=='\0')
{
fff:
printf("enter file name");
fflush(stdout);
gets(fn);
strcat(fn,".txt");
if((fp=fopen("tic_record.txt","r+"))==NULL)
{
    printf("error opening tic-tac-toe directory");
    exit(0);

}
while(!feof(fp))
{
fscanf(fp,"%s",cmp);
if(strcmp(cmp,fn)==0)
{
printf("file ne already there ,give another name\n");
goto fff;
}}
fprintf(fp,"%s\n",fn);
fclose(fp);
fs=0;
}remove(fn);
if((fp=fopen(fn,"w"))==NULL)
{
    printf("eror saving file");
    exit(0);
}
fprintf(fp,"%d\n%d\n%d\n%d\n%d",m,n,pl,g,aim);
while(pp<pl)
{ fprintf(fp,"%c%s\n%d",p[pp].sign,p[pp].name,p[pp].w);
pp++;
}
while(start!=0)
{    fprintf(fp,"%c%d\n%d\n%d",start->uusymbol,start->uux,start->uuy,start->uuinf);
//     fwrite(top,sizeof(unre),1,fp);
start=start->next;
}
fclose(fp);
exit(0);

case 'k':
nn : i=x;j=y; 
while(1)
{
if(x<=1)
{
x=n+1;
if(y==1)
y=m;
else
y--;
}
x--;
for(  ; x>=1;x--)
{
if((x==i)&&(y==j))
{gotoxy(((x)*d)-(d/2)+1,(y*e)-(e/2)+1);
goto yy;}
if(a[y-1][x-1].sym==' ')
{
gotoxy(((x)*d)-(d/2)+1,(y*e)-(e/2)+1);
goto yy;
}}}
default: 
if(z==o)
{
gotoxy(1,4*(m+1)+2);
printf("                                                                 \rcannot over-write");
gotoxy((x*d)-(d/2)+1,(y*e)-(e/2)+1);
goto yy;
}
l:gotoxy(1,4*(m+1)+2);printf("                                                                 \r not able to move ;enter valid choich");
gotoxy(((x)*d)-(d/2)+1,(y*e)-(e/2)+1);
goto yy;
}//switch end
if((a[y-1][x-1].sym!=' ')&&(z!='b')&&(z!='f'))
goto x;
yy:;
}
void checkbox()
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
case 0:pair(u,x,d,r,inf);break;
case 1:pair(y,l,d,r,inf);i++;break;
case 2:x1=x;y1=y;
while((x1>l)&&(y1>u))
{x1--;y1--;}
pair(y1,x1,d,r,inf);i++;break;
case 3:x1=x;y1=y;
while((x1<r)&&(y1>u))
{x1++;y1--;}
pair(y1,x1,d,r,inf);
break;
}
inf++;
}}
//checking pair
void pair(int s,int t, int lim1,int lim2,int inf)
{int f=0,ps,pt;
while((s<=lim1)&&(t<=lim2)&&(t>=temp))
{
if((a[s-1][t-1].sym==o)&&(a[s-1][t-1].v[inf]==0))
{f++;}
else
{zz: if (f<g)
{f=0;
}
else
{
inc(&s,&t,inf,-1);
ps=s;
pt=t;
    while(f!=0)
        {if(f>=g)
    win++;
            a[s-1][t-1].v[inf]=1;
insert(' ',s,t,inf);
     printer(s,t,inf,'|','-','\\','/');
inc(&s,&t,inf,-1);
f--;
        if(f==0)
        {
s=ps;
t=pt;
}
        }}}
inc(&s,&t,inf,1);
}
if(f!=0)
{
goto zz;}
}
