#include<stdio.h>

int main(){
  int n,k,t,ans = 0;
  scanf("%d %d\n",&n,&k );
  while(n--){
    scanf("%d",&t);
    ans += t%k == 0 ? 1 : 0;
  }
  printf("%d\n", ans);
  return 0;
}
