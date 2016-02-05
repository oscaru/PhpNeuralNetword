<?php

namespace Neuralnetwork;

class HiddenLayer extends Layer
{
    
  
	public function printLayer(){
        echo "\n\n### Hidden LAYER ###\n" ;
	
		foreach ($this->getListOfNeurons() as $key =>  $neuron) {
			echo "Neuron #" . $key . ": \n" ;
			echo "Input Weights: \n";
			echo "[". implode (',', $neuron->getListOfWeightIn() ) ."]\n";
			
		}
	}
    
    
}
