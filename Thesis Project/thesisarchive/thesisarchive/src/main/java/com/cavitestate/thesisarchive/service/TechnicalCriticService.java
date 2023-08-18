package com.cavitestate.thesisarchive.service;

import java.util.List;

import com.cavitestate.thesisarchive.dto.TechnicalCriticDTO;
import com.cavitestate.thesisarchive.model.TechnicalCritic;

public interface TechnicalCriticService {
	/**
	 * @param tcId
	 * @return TechnicalCritic
	 */
	TechnicalCritic getTechnicalCritic(int tcId);
	
	/**
	 * @param tc
	 */
	TechnicalCriticDTO saveTechnicalCritic(TechnicalCriticDTO tc);

	/**
	 * @return List<TechnicalCritic>
	 */
	List<TechnicalCritic> viewTechnicalCriticList();
	
	/**
	 * @return Boolean
	 */
	Boolean isTechnicalCriticExist(int tcId);
	
	/**
	 * deletes TechnicalCritic by id
	 */
	Boolean deleteTechnicalCriticById(int id);
	
	/**
	 * deletes all TechnicalCritic
	 */
	Boolean deleteAllTechnicalCritic();
}
