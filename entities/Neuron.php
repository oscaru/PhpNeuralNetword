<?php

namespace Neuralnetwork;

class Neuron 
{
    protected  $listOfWeightIn    = array();
	
	protected  $options = array(
        'inNum'  => 2,
        
    );
    
    function __construct($options = array())
    {
        foreach ( array_keys($this->options) as $optionKey  ){
            if(isset($options[$optionKey])) $this->options[$optionKey] = $options[$optionKey];
        }
        $this->initNeuron();
    }
    
    
    
    /**
     * return float
     */
	public function  initNeuron()
    {
        $listOfWeightIn = array();
         
        for($i=0; $i < $this->options['inNum']; $i++){
            $listOfWeightIn[] = $this->Random();
        }
		
        $this->setListOfWeightIn($listOfWeightIn);
	}

	public function  getListOfWeightIn() 
    {
		return $this->listOfWeightIn;
	}

	public  function setListOfWeightIn( $listOfWeightIn)
    {
		$this->listOfWeightIn = $listOfWeightIn;
	}

	
    
    protected function Random(){
        return (float)rand()/(float)getrandmax();
    }
}