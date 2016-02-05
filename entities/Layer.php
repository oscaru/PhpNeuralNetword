<?php
namespace Neuralnetwork;

abstract class Layer {

	protected $listOfNeurons;               //An ArrayList variable of objects of the Neuron class
	protected $numberOfNeuronsInLayer;      //nteger number to store the quantity of neurons that are part of the layer
    protected $neuronProperties = array(
        'inNum' => 2
    );
	
	abstract public function printLayer();
    
    public function __construct($numberOfNeuronsInLayer = 2, $neuronProperties = array() ) {
        foreach ( array_keys($this->neuronProperties) as $optionKey  ){
            if(isset($neuronProperties[$optionKey])) $this->neuronProperties[$optionKey] = $neuronProperties[$optionKey];
        }
        $this->numberOfNeuronsInLayer = $numberOfNeuronsInLayer;
        $this->initLayer();
    }
    
    
    public function initLayer(){
        $listOfNeurons = array();
        for($i=0; $i< $this->numberOfNeuronsInLayer; $i++){
            $listOfNeurons[] = new Neuron($this->neuronProperties);
        }
        $this->setListOfNeurons($listOfNeurons);
    }
      
    
	public function getListOfNeurons() {
		return $this->listOfNeurons;
	}

	public function setListOfNeurons($listOfNeurons) {
		$this->listOfNeurons = $listOfNeurons;
        $this->numberOfNeuronsInLayer = count($listOfNeurons);
	}

	public function getNumberOfNeuronsInLayer() {
		return $this->numberOfNeuronsInLayer;
	}

	
	
}

