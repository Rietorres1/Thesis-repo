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

import com.cavitestate.thesisarchive.dto.StudyTypeDTO;
import com.cavitestate.thesisarchive.model.StudyType;
import com.cavitestate.thesisarchive.service.StudyTypeService;



@RestController
@RequestMapping("/StudyType")
public class StudyTypeRestController {
	
	@Autowired
	public StudyTypeService Sttserv;
	
	
	@GetMapping("/getStudytype")
	public List<StudyType> getStudyType(){
		return Sttserv.viewStudyTypeList();
	}
	
	//create study type rest a pi
	@PostMapping("/saveStudyType")
	public StudyTypeDTO createStudyType(@RequestBody StudyTypeDTO stt){
		return Sttserv.saveStudyType(stt);
	}
	
	//delete
	@DeleteMapping("/deleteStudyType/{id}")
	public Boolean deleteStudyType(@PathVariable int id) {
		return Sttserv.deleteStudyTypeById(id);
	}	
}
