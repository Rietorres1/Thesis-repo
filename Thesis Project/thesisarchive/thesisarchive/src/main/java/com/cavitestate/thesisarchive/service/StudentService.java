package com.cavitestate.thesisarchive.service;

import java.util.List;

import com.cavitestate.thesisarchive.dto.StudentsDTO;
import com.cavitestate.thesisarchive.model.Students;


public interface StudentService {
	/**
	 * @param stId
	 * @return Students
	 */
	Students getStudents(int stId);
	
	/**
	 * @param st
	 */
	StudentsDTO saveStudents(StudentsDTO st);

	/**
	 * @return List<Students>
	 */
	List<Students> viewStudentsList();
	
	/**
	 * @return Boolean
	 */
	Boolean isStudentsExist(int stId);
	
	/**
	 * deletes Students by id
	 */
	Boolean deleteStudentsById(int id);
	
	/**
	 * deletes all Students
	 */
	Boolean deleteAllStudents();
}
