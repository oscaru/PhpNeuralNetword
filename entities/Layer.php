<?php
namespace Neuralnetwork;

abstract class Layer {

	protected $listOfNeurons;               //An ArrayList variable of objects of the Neuron class
	protected $numberOfNeuronsInLayer;      //nteger number to store the quantity of neurons
that are part of the layer
	
	abstract public function printLayer();

	public function getListOfNeurons() {
		return $this->listOfNeurons;
	}

	public function setListOfNeurons($listOfNeurons) {
		$this->listOfNeurons = $listOfNeurons;
	}

	public function getNumberOfNeuronsInLayer() {
		return $this->numberOfNeuronsInLayer;
	}

	public function setNumberOfNeuronsInLayer($numberOfNeuronsInLayer) {
		$this->numberOfNeuronsInLayer = $numberOfNeuronsInLayer;
	}
	
}

