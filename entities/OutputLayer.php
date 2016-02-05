<?php

namespace Neuralnetwork;

class OutputLayer extends Layer
{
    
  
	public function printLayer(){
        echo "\n\n### OUTPUT LAYER ###\n" ;
	
		foreach ($this->getListOfNeurons() as $key =>  $neuron) {
			echo "Neuron #" . $key . ": \n" ;
			echo "Input Weights: \n";
			echo "[". implode (',', $neuron->getListOfWeightIn() ) ."]\n";
			
		}
	}
    
    
}
