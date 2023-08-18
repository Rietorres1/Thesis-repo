package com.cavitestate.thesisarchive.repository;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.cavitestate.thesisarchive.model.TechnicalCritic;

@Repository
public interface TechnicalCriticRepository extends JpaRepository<TechnicalCritic, Integer>{

}
