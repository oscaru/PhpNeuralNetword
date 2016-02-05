<?php

namespace Neuralnetwork;

class NeuralNet
{
    protected $inputLayer;
    protected $outputLayer;
    protected $listOfHiddenLayer = array();
    
    protected $options = array(
        'inputs'              => 2,
        'neuronOnInputLayer'  => 2,
        'hiddenLayers'        => 2,
        'neuronOnHiddenLayer' => 3
        
    );
    
    function __construct($options = array()) 
    {
        foreach ( array_keys($this->options) as $optionKey  ){
            if(isset($options[$optionKey])) $this->options[$optionKey] = $options[$optionKey];
        }
        $this->initNet();
    }
    
    public function initNet(){
        extract($this->options);
        $this->inputLayer = new InputLayer($neuronOnInputLayer, ['inNum' =>  $inputs]);
        $this->outputLayer = new OutputLayer($neuronOnInputLayer,['inNum' =>  $neuronOnHiddenLayer] );
        
        for ($i = 0 ; $i < $hiddenLayers; $i++ ) {
            $hidden = ($i == 0) ?  new HiddenLayer($neuronOnHiddenLayer, ['inNum' =>  $neuronOnInputLayer]) 
                                :  new HiddenLayer($neuronOnHiddenLayer, ['inNum' =>  $neuronOnHiddenLayer]);
            
            $this->listOfHiddenLayer[] =  $hidden;
            
        }
        
    }
    
    public function printNet(){
        
         echo "\n\n### NEURAL NET ###\n" ;
        
        $this->inputLayer->printLayer();
        
        foreach($this->listOfHiddenLayer as $hidden){
            $hidden->printLayer();
        }
        
        $this->outputLayer->printLayer();
    }
    
}