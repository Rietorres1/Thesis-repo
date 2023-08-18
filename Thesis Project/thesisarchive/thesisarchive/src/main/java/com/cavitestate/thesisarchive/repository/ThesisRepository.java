package com.cavitestate.thesisarchive.repository;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.cavitestate.thesisarchive.model.Thesis;

@Repository
public interface ThesisRepository extends JpaRepository<Thesis, Integer>{

}
