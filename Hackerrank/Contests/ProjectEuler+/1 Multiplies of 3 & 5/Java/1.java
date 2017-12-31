import java.io.*;
import java.util.*;

public class Solution {
    
    public static long findSumOfN(long n){
        return n * (n+1) / 2;
    }
    
    public static long findSumOfMultiple(long mul, long n){
        n -= 1;
    	return findSumOfN((n/mul))*mul;
	}
	
	public static void main(String[] args){
		Scanner sc = new Scanner(System.in);
		int n = sc.nextInt();
		for(int i=0;i<n;i++){
			long temp = sc.nextLong();
			System.out.println(findSumOfMultiple(3, temp) + findSumOfMultiple(5, temp) - findSumOfMultiple(15, temp));
		}
		
	}
}
