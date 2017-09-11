#include <stdio.h>

int main() {
    int t,i;
    scanf("%d",&t);
    long int temp;
    long int s=0;
    for(i=0;i<t;i++){
        scanf("%ld",&temp);
        s += temp;
    }
    printf("%ld",s);  
    return 0;
}