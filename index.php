<?php

require __DIR__.'/entities/Neuron.php';
require __DIR__.'/entities/Layer.php';
require __DIR__.'/entities/InputLayer.php';
require __DIR__.'/entities/OutputLayer.php';
require __DIR__.'/entities/HiddenLayer.php';
require __DIR__.'/entities/NeuralNet.php';


$net = new \Neuralnetwork\NeuralNet();
$net->printNet();