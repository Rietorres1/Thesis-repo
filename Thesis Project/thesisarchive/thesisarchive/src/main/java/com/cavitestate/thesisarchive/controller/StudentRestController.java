package com.cavitestate.thesisarchive.controller;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.cavitestate.thesisarchive.dto.StudentsDTO;
import com.cavitestate.thesisarchive.model.Students;
import com.cavitestate.thesisarchive.service.StudentService;



@RestController
@RequestMapping("/student")
public class StudentRestController {
	@Autowired
	public StudentService Stserv;
	
	//get all products list
	@GetMapping("/getStudent")
	public List<Students> getStudents(){
		return Stserv.viewStudentsList();
	}
	
	//create inventory rest a pi
	@PostMapping("/saveStudents")
	public void createStudents(@RequestBody StudentsDTO st){
		Stserv.saveStudents(st);
	}
	
	//delete
	@DeleteMapping("/deleteStudents/{id}")
	public Boolean deleteStudents(@PathVariable int id) {
		return Stserv.deleteStudentsById(id);
	}	
}
