package com.dhayal;

public class UFFactory {
    public static IUFAlgo getUF(String algo, int n){

        IUFAlgo returnUFAlgo = null;
        if(algo == null){
            returnUFAlgo = null;
        }else if(algo.equalsIgnoreCase("QuickFind")){
            returnUFAlgo = new QuickFindUF(n);
        }else if(algo.equalsIgnoreCase("QuickUnion")){
            returnUFAlgo = new QuickUnionUF(n);
        }
        return returnUFAlgo;
    }

    public static IPrintable getPrinter(IUFAlgo ufAlgo){
        IPrintable basicPrintUF = new BasicPrintUF(ufAlgo);
        return basicPrintUF;
    }
}
