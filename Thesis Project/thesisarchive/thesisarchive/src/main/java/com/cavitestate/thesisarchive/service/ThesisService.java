package com.cavitestate.thesisarchive.service;

import java.util.List;

import com.cavitestate.thesisarchive.dto.ThesisDTO;
import com.cavitestate.thesisarchive.model.Thesis;


public interface ThesisService {
	/**
	 * @param thId
	 * @return Thesis
	 */
	Thesis getThesis(int thId);
	
	/**
	 * @param th
	 */
	ThesisDTO saveThesis(ThesisDTO th);

	/**
	 * @return List<Thesis>
	 */
	List<Thesis> viewThesisList();
	
	/**
	 * @return Boolean
	 */
	Boolean isThesisExist(int thId);
	
	/**
	 * deletes Thesis by id
	 */
	Boolean deleteThesisById(int id);
	
	/**
	 * deletes all Thesis
	 */
	Boolean deleteAllThesis();
}
