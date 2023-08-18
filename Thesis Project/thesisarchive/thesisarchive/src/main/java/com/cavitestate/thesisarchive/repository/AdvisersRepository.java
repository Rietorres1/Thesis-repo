package com.cavitestate.thesisarchive.repository;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.cavitestate.thesisarchive.model.Advisers;

@Repository
public interface AdvisersRepository extends JpaRepository<Advisers, Integer>{

}
