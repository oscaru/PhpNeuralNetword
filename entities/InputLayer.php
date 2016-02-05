<?php

namespace Neuralnetwork;

class InputLayer extends Layer
{
    
  
	public function printLayer(){
        echo "\n\n### INPUT LAYER ###\n" ;
	
		foreach ($this->getListOfNeurons() as $key =>  $neuron) {
			echo "Neuron #" . $key . ": \n" ;
			echo "Input Weights: \n";
			echo "[". implode (',', $neuron->getListOfWeightIn() ) ."]\n";
			
		}
	}
    
    
}
