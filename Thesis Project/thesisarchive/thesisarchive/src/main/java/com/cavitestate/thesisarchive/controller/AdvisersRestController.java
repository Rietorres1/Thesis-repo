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

import com.cavitestate.thesisarchive.dto.AdvisersDTO;
import com.cavitestate.thesisarchive.model.Advisers;
import com.cavitestate.thesisarchive.service.AdvisersService;


@RestController
@RequestMapping("/advisers")
public class AdvisersRestController {
	
	@Autowired
	public AdvisersService Adserv;
	
	//get all products list
	@GetMapping("/getadvisers")
	public List<Advisers> getAdvisers(){
		return Adserv.viewAdvisersList();
	}
	
	//work
	//create inventory rest a pi
	@PostMapping("/saveAdvisers")
	public AdvisersDTO createAdvisers(@RequestBody AdvisersDTO adv){
		return Adserv.saveAdvisers(adv);
	}
	//work
	
	//delete
	@DeleteMapping("/deleteAdvisers/{id}")
	public Boolean deleteAdvisers(@PathVariable int id) {
		return Adserv.deleteAdvisersById(id);
	}
}
