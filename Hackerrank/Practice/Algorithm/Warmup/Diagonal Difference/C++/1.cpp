#include <iostream>
using namespace std;

int main() {
    int n, i, j, a = 0, b = 0; 
    cin>>n;
    int temp[n];
    
    for(i = 0; i < n; i++){
        for(j = 0; j< n; j++){
           int temp; 
           cin>>temp; 
           if(i == j) a += temp; 
           if(i+j == n-1) b += temp; 
        }
    }
    cout<<abs(a-b);
    return 0;
}