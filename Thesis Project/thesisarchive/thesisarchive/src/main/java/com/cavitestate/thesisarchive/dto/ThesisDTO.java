package com.cavitestate.thesisarchive.dto;

public class ThesisDTO {

	private String Title;
	private String fileLocation;
	
	public void setTitle(String tName){
		this.Title = tName; 
	}
	public String getTitle(){
		return this.Title;
	}
	
	public void setfileLocation(String file){
		this.fileLocation = file; 
	}
	public String getfileLocation(){
		return this.fileLocation;
	}
	
	
	
	}