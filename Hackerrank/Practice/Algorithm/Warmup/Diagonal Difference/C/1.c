#include<stdio.h>

int main() {
    int n, i, j, a = 0, b = 0; 
    scanf("%d",&n);
    int temp[n];
   
    for(i = 0; i < n; i++){
        for(j = 0; j< n; j++){
           int temp; 
           scanf("%d",&temp);
           if(i == j) a += temp; 
           if(i+j == n-1) b += temp; 
        }
    }
    printf("%d",abs(a-b));
    return 0;
}