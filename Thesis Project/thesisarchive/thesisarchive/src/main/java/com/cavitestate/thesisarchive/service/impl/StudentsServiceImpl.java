package com.cavitestate.thesisarchive.service.impl;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.cavitestate.thesisarchive.dto.StudentsDTO;
import com.cavitestate.thesisarchive.model.Students;
import com.cavitestate.thesisarchive.repository.StudentsRepository;
import com.cavitestate.thesisarchive.service.StudentService;

@Service

public class StudentsServiceImpl implements StudentService{

	
		@Autowired
		public StudentsRepository stRepo;
		
		@Override
		public Students getStudents(int stId) {
			// TODO Auto-generated method stub
			return stRepo.getById(stId);
		}

		@Override
		public List<Students> viewStudentsList() {
			return stRepo.findAll();
		}

		@Override
		public Boolean isStudentsExist(int stId) {
			// TODO Auto-generated method stub
			return stRepo.existsById(stId);
		}

		@Override
		public Boolean deleteStudentsById(int stId) {
			return false;
		}

		@Override
		public Boolean deleteAllStudents() {
			// TODO Auto-generated method stub
			return false;
			
		}
		//work
		public Students saveRepo(StudentsDTO st){
			Students stRepo = new Students();
			stRepo.setStudentName(st.getStudentName());
			return stRepo;
		}
		
		public StudentsDTO saveData(Students st){
			StudentsDTO StudentsData = new StudentsDTO();
			StudentsData.setStudentName(st.getStudentName());
			return StudentsData;
		}
		//end work



		@Override
		public StudentsDTO saveStudents(StudentsDTO st) {
			// TODO Auto-generated method stub
			return null;
		}

	}

