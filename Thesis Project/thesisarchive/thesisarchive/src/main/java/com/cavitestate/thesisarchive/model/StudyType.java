package com.cavitestate.thesisarchive.model;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;

import lombok.Getter;
import lombok.Setter;

@Entity
@Setter
@Getter
public class StudyType {
	
	@Id
	@Column(nullable=false)
	@GeneratedValue(strategy = GenerationType.AUTO)
	private int StudyTypeId;
	
	@Column(nullable=false)
	private String StudyTypeName;
	
}
