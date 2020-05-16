package com.dhayal;

public class QuickUnionUF implements IUFAlgo {

    private int[] ids;
    private int length;

    public QuickUnionUF(int n){
        this.ids = new int[10];
        this.length = n;
        for(int i=0;i<this.length;i++){
            this.ids[i] = i;
        }
    }

    @Override
    public void union(int component1, int component2) {
        int component1Root = this.findRoot(component1);
        int component2Root = this.findRoot(component2);
        this.ids[component2Root] = component1Root;
    }

    @Override
    public boolean connected(int component1, int component2) {
        return this.findRoot(component1) == this.findRoot(component2);
    }

    @Override
    public int getId(int index){
        return this.ids[index];
    }

    @Override
    public int getLength() {
        return this.length;
    }

    private int findRoot(int component){
        while(component != this.ids[component]){
            component = this.ids[component];
        }
        return component;
    }
}
