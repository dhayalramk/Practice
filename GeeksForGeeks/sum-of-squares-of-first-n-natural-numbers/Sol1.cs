using System;

public class Sol1{
	static public void Main (){
		int n = 1000,total = 0;
		for(int i=1;i<=n;i++){
		    total += (i*i);
		}
		System.Console.WriteLine(total);
	}
}
