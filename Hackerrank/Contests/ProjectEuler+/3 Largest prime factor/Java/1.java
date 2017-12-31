import java.io.*;
import java.util.*;
import java.math.*;

public class Solution {
    
   
    public static long primeFactorsMax(long number) { 
        if(number <= 2){
            return number;
        }
        
        while(number%2 == 0){
            number /= 2;
        }
        
        if(number == 1){
            return 2;
        }
        
        long i=3;
        while (i <= Math.sqrt(number)){
            while (number%i == 0){
                number = number/i;
            }
            i = i+2;
        }
        i=i-2;
        return number > i ? number : i;
    }

    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        int t = in.nextInt();
        for(int a0 = 0; a0 < t; a0++){
            long n = in.nextLong();
            System.out.println(primeFactorsMax(n));
        }
    }
}
