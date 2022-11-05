package com.Employee;


import com.domain.Employee;
import com.repository.EmployeeRepo;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.validation.BindingResult;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.RequestMapping;

import javax.sql.DataSource;
import java.sql.SQLException;

@Controller
public class EmployeeController {

    private final EmployeeRepo employeeRepo;

    public EmployeeController(EmployeeRepo employeeRepo) {
        this.employeeRepo = employeeRepo;
    }

    @GetMapping("/index")
    public String GetFrom( Model model)
    {
        model.addAttribute("Employee", new Employee());
        return "index";
    }
    @RequestMapping("/result")
    public String PostFrom(@ModelAttribute Employee employee, BindingResult result)throws SQLException
    {
        employeeRepo.create(employee);
        return "result";
    }

}
