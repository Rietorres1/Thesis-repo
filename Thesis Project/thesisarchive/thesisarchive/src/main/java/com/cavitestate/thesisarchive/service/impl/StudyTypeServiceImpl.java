package com.cavitestate.thesisarchive.service.impl;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.cavitestate.thesisarchive.dto.StudyTypeDTO;
import com.cavitestate.thesisarchive.model.StudyType;
import com.cavitestate.thesisarchive.repository.StudytypeRepository;
import com.cavitestate.thesisarchive.service.StudyTypeService;

@Service

public class StudyTypeServiceImpl implements StudyTypeService{
	
	@Autowired
	public StudytypeRepository sttRepo;
	
	@Override
	public StudyType getStudyType(int sttId) {
		// TODO Auto-generated method stub
		return sttRepo.getById(sttId);
	}
	@Override
	public StudyTypeDTO saveStudyType(StudyTypeDTO sttDTO) {
		StudyType studytypeModel = saveRepo(sttDTO);
		return saveData(sttRepo.save(studytypeModel));
	}
	@Override
	public List<StudyType> viewStudyTypeList() {
		return sttRepo.findAll();
	}

	@Override
	public Boolean isStudyTypeExist(int sttId) {
		// TODO Auto-generated method stub
		return sttRepo.existsById(sttId);
	}

	@Override
	public Boolean deleteStudyTypeById(int sttId) {
		return false;
	}

	@Override
	public Boolean deleteAllStudyType() {
		// TODO Auto-generated method stub
		return false;
		
	}
	//work
		public StudyType saveRepo(StudyTypeDTO stt){
			StudyType sttRepo = new StudyType();
			sttRepo.setStudyTypeName(stt.getstudyTypeName());
			return sttRepo;
		}
		
		public StudyTypeDTO saveData(StudyType stt){
			StudyTypeDTO StudyTypeData = new StudyTypeDTO();
			StudyTypeData.setstudyTypeName(stt.getStudyTypeName());
			return StudyTypeData;
		}
		//end work
}
