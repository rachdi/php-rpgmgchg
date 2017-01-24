<?php
class User {
	private $email;
	private $id;
	private $createdAt;

	public function __construct($newid,$newemail,$newdate){
		$this->email=$newid;
		$this->id=$newemail;
		$this->createdAt=$newdate;
	}
	public function getEmail(){
		return $this->email;

	}
	public function getId(){
		return $this->id;

	}
	public function getCreatedAt(){
		return $this->createdAt;

	}
}


?>