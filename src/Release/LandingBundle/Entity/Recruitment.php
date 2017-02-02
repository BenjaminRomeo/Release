<?php

namespace Release\LandingBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Recruitment
{
	/**
    * @Assert\NotBlank()
    */
    protected $character_name;
	/**
    * @Assert\NotBlank()
    */
    protected $first_name; 
	/**
    * @Assert\NotBlank()
    */	
    protected $age;
	/**
    * @Assert\NotBlank()
    */	
    protected $gender;
	/**
    * @Assert\NotBlank()
    */	
    protected $interests;
	/**
    * @Assert\NotBlank()
    */	
    protected $availability;
	/**
    * @Assert\NotBlank()
    */	
	protected $description;
	/**
    * @Assert\NotBlank()
    */	
	protected $lodestone;
	/**
    * @Assert\NotBlank()
    */	
	protected $jobs;
	/**
    * @Assert\NotBlank()
    */	
	protected $gameplay;
	/**
    * @Assert\NotBlank()
    */	
	protected $bis_gear;
	/**
    * @Assert\NotBlank()
    */	
	protected $current_gear;
	/**
    * @Assert\NotBlank()
    */	
	protected $experience_games;
	/**
    * @Assert\NotBlank()
    */	
	protected $experience_ffxiv;
	/**
    * @Assert\NotBlank()
    */	
	protected $previous_guilds;
	/**
    * @Assert\NotBlank()
    */	
	protected $motivation;
	
    public function __construct() {
    }

	public function getCharacterName(){
		return $this->character_name;
	}
	
	public function setCharacterName($character_name){
		$this->character_name = $character_name;
		return $this;
	}
	
	public function getFirstName(){
		return $this->first_name;
	}
	
	public function setFirstName($first_name){
		$this->first_name = $first_name;
		return $this;
	}
	
	public function getAge(){
		return $this->age;
	}
	
	public function setAge($age){
		$this->age = $age;
		return $this;
	}
	
	public function getGender(){
		return $this->gender;
	}
	
	public function setGender($gender){
		$this->gender = $gender;
		return $this;
	}
	
	public function getInterests(){
		return $this->interests;
	}
	
	public function setInterests($interests){
		$this->interests = $interests;
		return $this;
	}
	
	public function getAvailability(){
		return $this->availability;
	}
	
	public function setAvailability($availability){
		$this->availability = $availability;
		return $this;
	}
	
	public function getDescription(){
		return $this->description;
	}
	
	public function setDescription($description){
		$this->description = $description;
		return $this;
	}
	
	public function getLodestone(){
		return $this->lodestone;
	}
	
	public function setLodestone($lodestone){
		$this->lodestone = $lodestone;
		return $this;
	}
	
	public function getJobs(){
		return $this->jobs;
	}
	
	public function setJobs($jobs){
		$this->jobs = $jobs;
		return $this;
	}
	
	public function getGameplay(){
		return $this->gameplay;
	}
	
	public function setGameplay($gameplay){
		$this->gameplay = $gameplay;
		return $this;
	}
	
	public function getBisGear(){
		return $this->bis_gear;
	}
	
	public function setBisGear($bis_gear){
		$this->bis_gear = $bis_gear;
		return $this;
	}
	
	public function getCurrentGear(){
		return $this->current_gear;
	}
	
	public function setCurrentGear($current_gear){
		$this->current_gear = $current_gear;
		return $this;
	}
	
	public function getExperienceGames(){
		return $this->experience_games;
	}
	
	public function setExperienceGames($experience_games){
		$this->experience_games = $experience_games;
		return $this;
	}
	
	public function getExperienceFfxiv(){
		return $this->experience_ffxiv;
	}
	
	public function setExperienceFfxiv($experience_ffxiv){
		$this->experience_ffxiv = $experience_ffxiv;
		return $this;
	}
	
	public function getPreviousGuilds(){
		return $this->previous_guilds;
	}
	
	public function setPreviousGuilds($previous_guilds){
		$this->previous_guilds = $previous_guilds;
		return $this;
	}
	
	public function getMotivation(){
		return $this->motivation;
	}
	
	public function setMotivation($motivation){
		$this->motivation = $motivation;
		return $this;
	}
}
