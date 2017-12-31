import java.io.*;
import java.util.*;

public class Solution {

    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        int n = in.nextInt(), temp;
        int f1=0,f2=0,f3=0;
        while(n-- != 0){
            temp = in.nextInt();
            if(temp>0)      f1++;
            else if(temp<0) f2++;
            else            f3++;
        }
        System.out.printf("%.3f\n%.3f\n%.3f\n",f1/n,f2/n,f3/n);
    }
}