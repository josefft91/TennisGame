<?php

class Game 
{
	private $server;
	private $receiver;
	private $server_points = 0;
	private $receiver_points = 0;
	private $scores = array('love', 'fifteen', 'thirty', 'forty');

	public function __construct($server, $receiver)
	{
		$this->server = $server;
		$this->receiver = $receiver;
	}

	public function point_to(string $player) : void
	{
		if($player === $this->server) {
			$this->server_points += 1;
		} 
		elseif ($player === $this->receiver) {
			$this->receiver_points += 1;
		} 
	}

	public function score() : string
	{
		if($this->has_won()) {
			return 'Game, ' . $this->highest_score();
		}

		if($this->has_advantage()) {
			return 'Advantage, ' . $this->highest_score();
		}

		if($this->is_deuce()) {
			return 'Deuce';
		}

		return ucfirst($this->scores[$this->server_points]) . ', ' . $this->scores[$this->receiver_points];
	}

	private function has_won() : bool
	{
		if(($this->server_points > 3) && $this->server_points - $this->receiver_points >= 2) {
			return true;
		} 

		if(($this->receiver_points > 3) && $this->receiver_points - $this->server_points >= 2) {
			return true;	
		}
		
		return false;
	}

	private function has_advantage() : bool
	{
		if(($this->server_points > 3) && $this->server_points - $this->receiver_points == 1) {
			return true;
		} 

		if(($this->receiver_points > 3) && $this->receiver_points - $this->server_points == 1) {
			return true;	
		}
		
		return false;
	}

	private function highest_score() : string
	{
		if($this->server_points > $this->receiver_points) {
			return $this->server;
		} else {
			return $this->receiver;
		}

	}

	private function is_deuce() : bool
	{
		if($this->server_points === 3 && $this->receiver_points === 3) {
			return true;
		}
		
		return false;
	}
}