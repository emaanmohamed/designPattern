<?php
	
	
namespace Structural\Adapter;
	
	
class EngineAdapter implements EngineInterface
{
	private $engine;
	
	public function __construct(TurboEngine $engine)
	{
		$this->engine = $engine;
	}
	
	public function startEngine()
	{
		$this->engine->startTurbo();
	}
	
}