package com.cavitestate.thesisarchive.dto;

public class StudentsDTO {

	private String StudentName;
	private String yrSection;
	
	public void setStudentName(String stName){
		this.StudentName = stName; 
	}
	
	public String getStudentName(){
		return this.StudentName;
	}

	public void setyrSection(String yr){
		this.yrSection = yr; 
	}
	
	public String getyrSection(){
		return this.yrSection;
	}

}
