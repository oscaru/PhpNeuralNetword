<?php

namespace Neuralnetwork;

class InputLayer extends Layer
{
    
    public function  initLayer( $inputLayer) {
		
		$listOfWeightInTemp =  array();
		$listOfNeurons = array();
		
		for ($i = 0; $i < $inputLayer->getNumberOfNeuronsInLayer(); $i++) {
			$neuron = new Neuron();
			
			$listOfWeightInTemp[] =  $neuron->initNeuron() ;

			$neuron->setListOfWeightIn( $listOfWeightInTemp );
			$listOfNeurons[] =  $neuron ;

			$listOfWeightInTemp = array();
		}

		inputLayer.setListOfNeurons(listOfNeurons);

		return inputLayer;
	}

	public void printLayer(InputLayer inputLayer){
		System.out.println("### INPUT LAYER ###");
		int n = 1;
		for (Neuron neuron : inputLayer.getListOfNeurons()) {
			System.out.println("Neuron #" + n + ":");
			System.out.println("Input Weights:");
			System.out.println(Arrays.deepToString( neuron.getListOfWeightIn().toArray() ));
			n++;
		}
	}
    
    
}
