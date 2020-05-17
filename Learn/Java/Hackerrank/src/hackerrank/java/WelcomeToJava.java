package hackerrank.java;

import java.io.PrintWriter;
import java.util.Arrays;
import static java.lang.System.*;
public class WelcomeToJava {

    private void method1(){
        System.out.println("Hello, World.");
        System.out.println("Hello, Java.");
    }

    private void method2(){
        System.out.println("Hello, World.\nHello, Java.");
    }

    private void method3(){
        System.out.println("Hello, World."+"\n"+"Hello, Java.");
    }

    private void method4(){
        out.println("Hello, World."+"\n"+"Hello, Java.");
    }

    private void method5(){
        Arrays.asList("Hello, World.", "Hello, Java.").forEach(System.out::println);
    }

    private void method6(){
        PrintWriter pw = new PrintWriter(System.out, true);
        pw.println("Hello, World."+"\n"+"Hello, Java.");
        out.flush();
        out.close();
    }

    private void method7(){
        String s1 = "Hello, World.";
        String s2 = "Hello, Java.";
        System.out.println(s1 + System.lineSeparator() + s2);
    }

    private void method8(){
        System.out.printf("%s%n%s%n","Hello, World.","Hello, Java.");
    }

    private void method9(){
        String hello = "Hello, ";
        System.out.println(hello + "World.");
        System.out.println(hello + "Java.");
    }

    public static void main(String[] args) {
        WelcomeToJava s = new WelcomeToJava();
//        s.method1();
//        s.method2();
//        s.method3();
//        s.method4();
//        s.method5();
//        s.method6();
//        s.method7();
//        s.method8();
        s.method9();
    }
}