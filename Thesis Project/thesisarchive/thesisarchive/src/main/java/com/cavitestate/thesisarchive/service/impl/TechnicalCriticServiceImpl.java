package com.cavitestate.thesisarchive.service.impl;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.cavitestate.thesisarchive.dto.TechnicalCriticDTO;
import com.cavitestate.thesisarchive.model.TechnicalCritic;
import com.cavitestate.thesisarchive.repository.TechnicalCriticRepository;
import com.cavitestate.thesisarchive.service.TechnicalCriticService;


@Service
public class TechnicalCriticServiceImpl implements TechnicalCriticService{
	@Autowired
	public TechnicalCriticRepository tcRepo;
	
	@Override
	public TechnicalCritic getTechnicalCritic(int tcId) {
		// TODO Auto-generated method stub
		return tcRepo.getById(tcId);
	}
	@Override
	public TechnicalCriticDTO saveTechnicalCritic(TechnicalCriticDTO tcDTO) {
		TechnicalCritic TechnicalCriticModel = saveRepo(tcDTO);
		return saveData(tcRepo.save(TechnicalCriticModel));
	}
	

	@Override
	public List<TechnicalCritic> viewTechnicalCriticList() {
		return tcRepo.findAll();
	}

	@Override
	public Boolean isTechnicalCriticExist(int tcId) {
		// TODO Auto-generated method stub
		return tcRepo.existsById(tcId);
	}

	@Override
	public Boolean deleteTechnicalCriticById(int tcId) {
		return false;
	}

	@Override
	public Boolean deleteAllTechnicalCritic() {
		// TODO Auto-generated method stub
		return false;
		
	}
	//work
			public TechnicalCritic saveRepo(TechnicalCriticDTO tc){
				TechnicalCritic tcRepo = new TechnicalCritic();
				tcRepo.setTechnicalCriticName(tc.getTechnicalCriticName());
				return tcRepo;
			}
			
			public TechnicalCriticDTO saveData(TechnicalCritic tc){
				TechnicalCriticDTO TechnicalCriticData = new TechnicalCriticDTO();
				TechnicalCriticData.setTechnicalCriticName(tc.getTechnicalCriticName());
				return TechnicalCriticData;
			}
			//end work
}
