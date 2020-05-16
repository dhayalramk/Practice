package com.dhayal;

public interface IUFAlgo {
    public void union(int component1, int component2);
    public boolean connected(int component1, int component2);

    public int getId(int index);
    public int getLength();
}
