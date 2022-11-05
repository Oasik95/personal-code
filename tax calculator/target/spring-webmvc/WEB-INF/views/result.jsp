<%--
  Created by IntelliJ IDEA.
  User: oasik
  Date: 11/4/2022
  Time: 12:06 AM
  To change this template use File | Settings | File Templates.
--%>
<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<%@ page isELIgnored="false" %>
<html>
<head>
    <title>Title</title>
</head>
<body>
<h1>RESULT</h1>

<p> YEARLY TAX = ${employee.getTaxs()}</p>

<p>YEARLY NETSALARY = ${employee.getNetsal()}</p>

<p> MONTHLY TAX = ${employee.getMonthlytaxs()}</p>

<p>MONTHLY NETSALARY = ${employee.getMonthlyNetsal()}</p>
</body>
</html>
