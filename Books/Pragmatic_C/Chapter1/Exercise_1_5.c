#include<stdio.h>

int main(){
  int weekCount = -1;
  char weekDays[7][12] = { "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday" };
  while(weekCount++ < 6){
    printf("%s\n",weekDays[weekCount] );
  }
  return 0;
}
