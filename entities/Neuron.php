<?php

namespace Neuralnetwork;

class Neuron 
{
    protected  $listOfWeightIn    = array();
	protected  $listOfWeightOut   = array();
	
    /**
     * return float
     */
	public  initNeuron()
    {
	
		return $this->Random();
	}

	public function  getListOfWeightIn() 
    {
		return $this->listOfWeightIn;
	}

	public  function setListOfWeightIn( $listOfWeightIn)
    {
		$this->listOfWeightIn = $listOfWeightIn;
	}

	public function getListOfWeightOut()
    {
		return $listOfWeightOut;
	}

	public function setListOfWeightOut($listOfWeightOut) 
    {
		$this->listOfWeightOut = $listOfWeightOut;
	}
	
    
    protected function Random($min = 0, $max = 1){
       return $min + rand($min,$max) / getrandmax() * ($max - $min);
    }
}