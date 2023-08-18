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

import com.cavitestate.thesisarchive.dto.TechnicalCriticDTO;
import com.cavitestate.thesisarchive.model.TechnicalCritic;
import com.cavitestate.thesisarchive.service.TechnicalCriticService;

@RestController
@RequestMapping("/technicalCritic")
public class TechnicalCriticRestController {
	
	@Autowired
	public TechnicalCriticService Tcserv;
	
	//get all TechnicalCritic list
	@GetMapping("/getTechnicalCritic")
	public List<TechnicalCritic> getTechnicalCritic(){
		return Tcserv.viewTechnicalCriticList();
	}
	
	//create TechnicalCritic rest a pi
	@PostMapping("/saveTechnicalCritic")
	public TechnicalCriticDTO createTechnicalCritic(@RequestBody TechnicalCriticDTO tc){
		return Tcserv.saveTechnicalCritic(tc);
	}
	
	//delete
	@DeleteMapping("/deleteTechnicalCritic/{id}")
	public Boolean deleteTechnicalCritic(@PathVariable int id) {
		return Tcserv.deleteTechnicalCriticById(id);
	}	
}
