package com.domain;

public class Employee {

    private String empname;
    private double Yearlysalary;
    private double tax;
    private double nsal;

    private double Monthlysalary;
    private double Monthlytax;
    private double Monthlynsal;


    public String getEmpname() {
        return empname;
    }

    public void setEmpname(String empname) {
        this.empname = empname;
    }

    public double getYearlysalary() {
        return Yearlysalary;
    }

    public void setYearlysalary(double yearlysalary) {
        Yearlysalary = yearlysalary;
    }

    public double getSalary() {
        return Yearlysalary;
    }

    public void setSalary(double salary) {
        this.Yearlysalary = Yearlysalary;
    }

    public double getTax() {
        return tax;
    }

    public void setTax(double tax) {
        this.tax = tax;
    }

    public double getNsal() {
        return nsal;
    }

    public void setNsal(double nsal) {
        this.nsal = nsal;
    }

    public double getTaxs()
    {
        if (Yearlysalary > 500000)
        {
           tax = Yearlysalary *10/100;
        }
        else if (Yearlysalary >30000)
        {
         tax =Yearlysalary *5/100;
        }
        else
        {
         tax = 0;
        }
        return tax;
    }

    public double getNetsal()
    {
        nsal = Yearlysalary - tax;
        return nsal;
    }

    public double getMonthlysalary() {
        return Monthlysalary;
    }

    public void setMonthlysalary(double Monthlysalary) {
        this.Monthlysalary = Monthlysalary;
    }

    public double getMonthlytax() {
        return Monthlytax;
    }

    public void setMonthlytax(double Monthlytax) {
        this.Monthlytax = Monthlytax;
    }

    public double getMonthlynsal() {
        return Monthlynsal;
    }

    public void setMonthlynsal(double Monthlynsal) {
        this.Monthlynsal = Monthlynsal;
    }

    public double getMonthlytaxs()
    {
        Monthlytax = tax/12;
        return Monthlytax;
    }

    public double getMonthlyNetsal()
    {
        Monthlynsal = nsal/12 ;
        return Monthlynsal;
    }


}
