package com.example;

import org.chocosolver.solver.Model;
import org.chocosolver.solver.Solver;
import org.chocosolver.solver.variables.IntVar;

public class Constraint {
    public static void main(String[] args) {
        Model model = new Model("resavia");
        IntVar root = model.intVar("root", 0, 1);
        IntVar feature1 = model.intVar("feature1", 0, 1);
        IntVar feature2 = model.intVar("feature2", 0, 1);
        IntVar feature3 = model.intVar("feature3", 0, 1);
        IntVar feature4 = model.intVar("feature4", 0, 1);
        IntVar feature5 = model.intVar("feature5", 0, 1);
        IntVar feature6 = model.intVar("feature6", 0, 1);
        IntVar feature7 = model.intVar("feature7", 0, 1);
        IntVar feature8 = model.intVar("feature8", 0, 1);
        IntVar feature9 = model.intVar("feature9", 0, 1);
        IntVar feature10 = model.intVar("feature10", 0, 1);
        IntVar feature11 = model.intVar("feature11", 0, 1);
        IntVar feature12 = model.intVar("feature12", 0, 1);

        model.arithm(root, "=", 1).post();
        model.arithm(root, ">=", feature11).post();
        model.arithm(root, ">=", feature12).post();
        model.arithm(feature1, "+", feature2, "=", 1).post();
        model.arithm(feature1, ">=", feature7).post();
        model.arithm(feature1, "=", feature8).post();
        model.arithm(feature9, "+", feature10, ">=", feature8).post();
        model.arithm(feature2, ">=", feature3).post();
        model.arithm(feature2, ">=", feature4).post();
        model.arithm(feature2, ">=", feature5).post();
        model.arithm(feature5, ">=", feature6).post();

        Solver solver = model.getSolver();
        int compteur=0;
        System.out.println(" 1  2  3  4  5  6  7  8  9 10 11 12");
        System.out.println();
        while (solver.solve()) {
            compteur++;
            System.out.println(" "+feature1.getValue()+"  "+feature2.getValue()+"  "+
            feature3.getValue()+"  "+feature4.getValue()+"  "+feature5.getValue()+"  "+
            feature6.getValue()+"  "+feature7.getValue()+"  "+feature8.getValue()+"  "+
            feature9.getValue()+"  "+feature10.getValue()+"  "+feature11.getValue()+"  "+feature12.getValue());
        }
        System.out.println();
        System.out.println("Il y a "+compteur+" solutions");
    }
}
