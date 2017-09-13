#include <iostream>
#include <algorithm>
using namespace std;

int main() {
    
    int n, i, temp;
    float f1=0,f2=0,f3=0;
    cin>>n;
    for(i=0;i<n;i++){
        cin>>temp;
        if(temp>0)      f1++;
        else if(temp<0) f2++;
        else            f3++;
    }
    cout<<f1/n<<"\n"<<f2/n<<"\n"<<f3/n;
    return 0;
}