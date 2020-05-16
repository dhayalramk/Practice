package com.dhayal;

public class UFFactory {
    public static UFAlgo getUF(String algo, int n){

        UFAlgo returnUFAlgo = null;
        if(algo == null){
            returnUFAlgo = null;
        }else if(algo.equalsIgnoreCase("QuickFind")){
            returnUFAlgo = new QuickFindUF(n);
        }else if(algo.equalsIgnoreCase("QuickUnion")){
            returnUFAlgo = new QuickUnionUF(n);
        }
        return returnUFAlgo;
    }

    public static Printable getPrinter(UFAlgo ufAlgo){
        Printable basicPrintUF = new BasicPrintUF(ufAlgo);
        return basicPrintUF;
    }
}
