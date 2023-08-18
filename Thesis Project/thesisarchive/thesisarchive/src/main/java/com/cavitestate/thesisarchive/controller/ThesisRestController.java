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

import com.cavitestate.thesisarchive.dto.ThesisDTO;
import com.cavitestate.thesisarchive.model.Thesis;
import com.cavitestate.thesisarchive.service.ThesisService;

@RestController
@RequestMapping("/thesis")
public class ThesisRestController {
	@Autowired
	public ThesisService Thserv;
	
	//get all products list
	@GetMapping("/archive/")
	public List<Thesis> getProducts(){
		return Thserv.viewThesisList();
 }
	
	//create inventory rest api
	@PostMapping("/thesis/")
	public ThesisDTO createThesis(@RequestBody ThesisDTO th){
		return Thserv.saveThesis(th);
	}
	
	
	//delete
	@DeleteMapping("/thesis/{id}")
	public boolean deleteThesis(@PathVariable("id") int id) {
		return Thserv.deleteThesisById(id);
	}	
}
