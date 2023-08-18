package com.cavitestate.thesisarchive.service.impl;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.cavitestate.thesisarchive.dto.AdvisersDTO;
import com.cavitestate.thesisarchive.model.Advisers;
import com.cavitestate.thesisarchive.repository.AdvisersRepository;
import com.cavitestate.thesisarchive.service.AdvisersService;


@Service
public class AdvisersServiceImpl implements AdvisersService{
	
	@Autowired
	public AdvisersRepository adRepo;
	
	@Override
	public Advisers getAdvisers(int adId) {
		// TODO Auto-generated method stub
		return adRepo.getById(adId);
	}
	
	//work
	@Override
	public AdvisersDTO saveAdvisers(AdvisersDTO advDTO) {
		Advisers advisersModel = saveRepo(advDTO);
		return saveData(adRepo.save(advisersModel));
	}
	//end work

	@Override
	public List<Advisers> viewAdvisersList() {
		return adRepo.findAll();
	}

	@Override
	public Boolean isAdvisersExist(int adId) {
		// TODO Auto-generated method stub
		return adRepo.existsById(adId);
	}

	@Override
	public Boolean deleteAdvisersById(int adId) {
		return false;
	}

	@Override
	public Boolean deleteAllAdvisers() {
		// TODO Auto-generated method stub
		return false;
	}
	//work
	public Advisers saveRepo(AdvisersDTO adv){
		Advisers adviserRepo = new Advisers();
		adviserRepo.setAdvisersName(adv.getAdvisersName());
		return adviserRepo;
	}
	
	public AdvisersDTO saveData(Advisers adv){
		AdvisersDTO adviserData = new AdvisersDTO();
		adviserData.setAdvisersName(adv.getAdvisersName());
		return adviserData;
	}
	//end work
	
}
