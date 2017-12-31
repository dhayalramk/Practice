#include <stdio.h>
#include <stdlib.h>

int simpleArraySum(int n, int ar_size, int* ar) {
     int result = 0;
    while(n--){
        result += ar[n];
    }
    return result;
}

int main() {
    int n; 
    scanf("%i", &n);
    int *ar = malloc(sizeof(int) * n);
    for(int ar_i = 0; ar_i < n; ar_i++){
       scanf("%i",&ar[ar_i]);
    }
    int result = simpleArraySum(n, n, ar);
    printf("%d\n", result);
    return 0;
}
