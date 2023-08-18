package com.cavitestate.thesisarchive.service;

import java.util.List;

import com.cavitestate.thesisarchive.dto.AdvisersDTO;
import com.cavitestate.thesisarchive.model.Advisers;



public interface AdvisersService {
	/**
	 * @param adId
	 * @return Advisers
	 */
	Advisers getAdvisers(int adId);
	
	/**
	 * @param ad
	 */
	AdvisersDTO saveAdvisers(AdvisersDTO adv);

	/**
	 * @return List<Advisers>
	 */
	List<Advisers> viewAdvisersList();
	
	/**
	 * @return Boolean
	 */
	Boolean isAdvisersExist(int adId);
	
	/**
	 * deletes Advisers by id
	 */
	Boolean deleteAdvisersById(int id);
	
	/**
	 * deletes all Advisers
	 */
	Boolean deleteAllAdvisers();
}
