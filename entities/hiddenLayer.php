<?php

namespace Neuralnetwork;

class HiddenLayer extends Layer
{
    
  
	public function printLayer(){
        echo "### Hidden LAYER ###" ;
	
		foreach ($this->getListOfNeurons() as $key =>  $neuron) {
			echo "Neuron #" + $key + ": \n" ;
			echo "Input Weights: \n";
			echo "[". implode (',', $neuron->getListOfWeightIn() ) ."]";
			
		}
	}
    
    
}
