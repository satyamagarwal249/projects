#include<windows.h>
void gotoxy(int aa, int bb)
{

    COORD cc = { aa, bb };  
    SetConsoleCursorPosition(  GetStdHandle(STD_OUTPUT_HANDLE) , cc);
}
struct matrix
{
    char sym;
    int **v;
    int * hi;
};
typedef struct matrix mat;
 int capacity,*hsize,**heaps; 
 mat **a;  
int m,n,c=0,g,x,y,temp,win,d=6,e=4,pl;
char *p;
char o;
void disp();
void cursor(char z);
void checkbox(int inf);
void pair(int s,int t, int lim1,int lim2,int inf);
void dish()
{
	int j;
	static int count =0;
		gotoxy(1,4*(m+1)+5+pl);
	count++;
	//printf("\npress to see disp");
//getch();
//printf("\r         ");
	for(j=0;j<pl;j++)
		{
		gotoxy(1,4*(m+1)+5+j);
		printf("                                                                                           ");printf("\rcount =%d  player =%d==",count,j+1);
		display(j);
		
}

gotoxy(((x*d)-(d/2)+1),(y*e-(e/2)+1));
}
void message(char * msg)
{
	
gotoxy(1,4*(m+1)+3);
puts(msg);
 gotoxy(((x*d)-(d/2)+1),(y*e-(e/2)+1));

}

int give_marks(int y,int x,int c)
{
return(a[y][x].v[c][0]+ a[y][x].v[c][1]+ a[y][x].v[c][2]+ a[y][x].v[c][3]);
}
