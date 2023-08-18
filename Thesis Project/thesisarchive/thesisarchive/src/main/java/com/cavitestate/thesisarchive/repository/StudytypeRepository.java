package com.cavitestate.thesisarchive.repository;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.cavitestate.thesisarchive.model.StudyType;

@Repository
public interface StudytypeRepository extends JpaRepository<StudyType, Integer>{

}
