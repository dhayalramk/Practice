package com.dhayal;

public class BasicPrintUF implements Printable{

    UFAlgo ufAlgo;

    public BasicPrintUF(UFAlgo ufAlgo){
        this.ufAlgo = ufAlgo;
    }

    @Override
    public void printAll(){
        int length = this.ufAlgo.getLength();
        for(int i=0;i<length;i++){
            int id = this.ufAlgo.getId(i);
            System.out.println("Key:"+i+", Value:"+id);
        }
    }

    @Override
    public void isConnected(boolean flag, int component1, int component2) {
        System.out.println("Component: "+component1+ ", Component:" + component2+".  Are "+(flag?"":"not ")+"connected");
    }
}
