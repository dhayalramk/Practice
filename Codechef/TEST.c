#include<stdio.h>

int main(){
  int in;
  while(1){
    scanf("%d\n",&in );
    if( in == 42 ){
      break;
    }else{
      printf("%d\n",in );
    }
  }
  return 0;
}
