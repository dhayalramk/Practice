package com.dhayal.dataStructure.example;

import com.dhayal.dataStructure.Stack;
public class StackExample {
    public static void main(String[] args){
        Stack s = new Stack(10);
        for (int i=1;i<=10;i++){
            s.push(i*10);
        }
        for (int i=0;i<10;i++){
            System.out.println(s.pop());
        }
    }
}
