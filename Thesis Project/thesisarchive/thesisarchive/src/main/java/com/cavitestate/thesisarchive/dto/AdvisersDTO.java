 package com.cavitestate.thesisarchive.dto;

public class AdvisersDTO {
	
	private int AdvisersId;
	private String AdvisersName;
	
	public void setAdvisersName(String adName){
		this.AdvisersName = adName; 
	}
	
	public String getAdvisersName(){
		return this.AdvisersName;
	}
}