package com.cavitestate.thesisarchive.service;

import java.util.List;

import com.cavitestate.thesisarchive.dto.StudyTypeDTO;
import com.cavitestate.thesisarchive.model.StudyType;


public interface StudyTypeService {
	/**
	 * @param sttId
	 * @return StudyType
	 */
	StudyType getStudyType(int sttId);
	
	/**
	 * @param stt
	 */
	StudyTypeDTO saveStudyType(StudyTypeDTO stt);

	/**
	 * @return List<StudyType>
	 */
	List<StudyType> viewStudyTypeList();
	
	/**
	 * @return Boolean
	 */
	Boolean isStudyTypeExist(int sttId);
	
	/**
	 * deletes StudyType by id
	 */
	Boolean deleteStudyTypeById(int id);
	
	/**
	 * deletes all StudyType
	 */
	Boolean deleteAllStudyType();

}
