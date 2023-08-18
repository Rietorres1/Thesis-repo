package com.cavitestate.thesisarchive.service.impl;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.cavitestate.thesisarchive.dto.ThesisDTO;
import com.cavitestate.thesisarchive.model.Thesis;
import com.cavitestate.thesisarchive.repository.ThesisRepository;
import com.cavitestate.thesisarchive.service.ThesisService;


@Service
public class ThesisServiceImpl implements ThesisService{

	@Autowired
	public ThesisRepository TsRepo;
	
	@Override
	public Thesis getThesis(int thId) {
		// TODO Auto-generated method stub
		return TsRepo.getById(thId);
	}

	@Override
	public ThesisDTO saveThesis(ThesisDTO thDTO) {
		Thesis ThesisModel = saveRepo(thDTO);
		return saveData(TsRepo.save(ThesisModel));
	}

	@Override
	public List<Thesis> viewThesisList() {
		return TsRepo.findAll();
	}

	@Override
	public Boolean isThesisExist(int thId) {
		// TODO Auto-generated method stub
		return TsRepo.existsById(thId);
	}

	@Override
	public Boolean deleteThesisById(int thId) {
		return false;
	}

	@Override
	public Boolean deleteAllThesis() {
		// TODO Auto-generated method stub
		return false;
		
	}
	public Thesis saveRepo(ThesisDTO th){
		Thesis ThesisRepo = new Thesis();
		ThesisRepo.setTitle(th.getTitle());
		return ThesisRepo;
	}
	
	public ThesisDTO saveData(Thesis th){
		ThesisDTO ThesisData = new ThesisDTO();
		ThesisData.setTitle(th.getTitle());
		return ThesisData;
	}
	//end work

}