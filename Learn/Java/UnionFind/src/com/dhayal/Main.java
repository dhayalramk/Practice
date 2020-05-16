package com.dhayal;

public class Main {

	private void execute(String algo){
		UFAlgo object = UFFactory.getUF(algo,10);
		Printable printUF = UFFactory.getPrinter(object);
		object.union(3,4);
		object.union(3,8);
		object.union(5,6);
		object.union(4,9);
		object.union(2,1);
		object.union(5,0);
		object.union(7,2);
		object.union(6,1);
		printUF.printAll();
	}

    public static void main(String[] args) {
		Main runProgram = new Main();
		runProgram.execute("QuickFind");
		runProgram.execute("QuickUnion");
    }
}
