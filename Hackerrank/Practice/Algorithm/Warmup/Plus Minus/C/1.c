#include <stdio.h>

int main() {
    
    int n, i, temp;
    float f1=0,f2=0,f3=0;
    scanf("%d",&n);
    for(i=0;i<n;i++){
        scanf("%d",&temp);
        if(temp>0)      f1++;
        else if(temp<0) f2++;
        else            f3++;
    }
    printf("%f\n%f\n%f",f1/n,f2/n,f3/n);
    return 0;
}