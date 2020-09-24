<?php
	
	
namespace Structural\Adapter;
	
	
class Car
{
	private $engine;
	
	public function __construct(EngineInterface $engine)
	{
		$this->engine = $engine;
	}
	
	public function start()
	{
		$this->engine->startEngine();
	}
	
}