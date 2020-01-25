import java.io.*;
import java.util.Scanner;
// https://ide.geeksforgeeks.org/5GJJIkPQNl
class Sol1 {
	public static void main (String[] args) {
	    int n, result = 0;
		Scanner s = new Scanner(System.in);
		n = s.nextInt();
		for(int i=1;i<=n;i++){
		    result += (i*i);
		}
		System.out.println(result);
	}
}
