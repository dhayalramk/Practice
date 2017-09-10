#include <stdio.h>
#include <stdlib.h>


int main() {
    int a[3],b[3];
    scanf("%d %d %d %d %d %d", &a[0], &a[1], &a[2], &b[0], &b[1], &b[2]);
    printf("%d %d", ((a[0] > b[0]) + (a[1] > b[1]) + (a[2] > b[2])), ((a[0] < b[0]) + (a[1] < b[1]) + (a[2] < b[2])) );
    return 0;
}
