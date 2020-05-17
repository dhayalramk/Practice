package com.dhayal.dataStructure;
public class Stack implements IStack{
    int top;
    int[] elements;
    int max;

    public Stack(int size){
        this.top=-1;
        this.max = size;
        this.elements = new int[this.max];
    }

    public boolean push(int element){
        if(this.isFull()){
            System.out.println("Stackoverflow");
            return false;
        }
        this.elements[++this.top] = element;
        return true;
    }

    public int pop(){
        if(this.isEmpty()){
            System.out.println("Stack is already empty");
            return 0;
        }
        int temp = this.elements[top--];
        return temp;
    }

    public int peek(){
        if(this.isEmpty()){
            System.out.println("Stack is already empty");
            return 0;
        }
        return this.elements[this.top];
    }

    public boolean isEmpty(){
        return this.top < 0;
    }

    public boolean isFull(){
        return this.top+1 >= this.max;
    }

    public int size(){
        return this.top + 1;
    }
}
