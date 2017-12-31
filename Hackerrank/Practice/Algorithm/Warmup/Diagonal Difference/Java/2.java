import java.io.*;
import java.util.*;

public class Solution {

    public static void main(String[] args) {
        
        Scanner in = new Scanner(System.in);
        int  size = in.nextInt(), temp, a=0,b=0;
        for (int  x = 0; x < size; x++) {
            for (int y = 0; y < size; y++) {
                temp = in.nextInt();
                if(x == y) a += temp; 
                if(x+y == size-1) b += temp; 
            }
        }
        System.out.println(Math.abs(a-b));
    }
}