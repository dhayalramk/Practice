package com.dhayal;

public class QuickFindUF implements IUFAlgo {

    private int[] ids;
    private int length;

    public QuickFindUF(int n){
        this.ids = new int[10];
        this.length = n;
        for(int i=0;i<this.length;i++){
            this.ids[i] = i;
        }
    }

    @Override
    public void union(int component1, int component2){
        int toUpdate = this.ids[component1];
        int toReplace = this.ids[component2];
        for(int i=0;i<this.length;i++){
            if(this.ids[i]==toReplace){
                this.ids[i] = toUpdate;
            }
        }
    }

    @Override
    public boolean connected(int component1, int component2){
        return this.ids[component1] == this.ids[component2];
    }

    @Override
    public int getId(int index){
        return this.ids[index];
    }

    @Override
    public int getLength() {
        return this.length;
    }
}
