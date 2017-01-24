<?php 
require_once ('Product.php');
class Vegetable extends Product{
	private $productorName;
	private $expireAt;
	public function __construct($id,$name,$price,$productorName,$expireAt){
		$this->SetproductorName($productorName);
		$this->expireAt=$expireAt;
		parent::__construct($id,$name,$price);
	}
	public function getProductorName(){
		return $this->productorName;
	}
	public function ExpireAt(){
		return $this->expireAt;
	}
	public function SetproductorName($productorName){
		$this->productorName=$productorName;
	}
	// public function isFresh() {

	// 	$date = date('Y-m-d');

	// 	if ($date)

	// }



}
















?>