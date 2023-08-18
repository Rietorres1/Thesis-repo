package com.cavitestate.thesisarchive.repository;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.cavitestate.thesisarchive.model.Students;


@Repository
public interface StudentsRepository extends JpaRepository<Students, Integer>{

}
