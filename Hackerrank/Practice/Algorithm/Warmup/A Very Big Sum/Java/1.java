import java.io.*;
import java.util.*;

public class Solution {

    public static void main(String[] args) {
        Scanner s = new Scanner(System.in);
        int t = s.nextInt();
        long sum = 0;
        while(t-- > 0){
            sum += s.nextInt();
        }
        System.out.println(sum);
    }
}