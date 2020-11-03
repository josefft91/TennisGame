<?php 

use PHPUnit\Framework\TestCase;

class GameTest extends TestCase {
    public function testScoreIsFortyFifteen(): void {
        $server = 'J';
        $receiver = 'B';

        $game = new Game($server, $receiver);
        $game->point_to($server);
        $game->point_to($server);
        $game->point_to($receiver);
        $game->point_to($server);

        $this->assertEquals('Forty, fifteen', $game->score());

    }

    public function testReceiverHasAdvantage() {
        $server = 'J';
        $receiver = 'B';

        $game = new Game($server, $receiver);
        $game->point_to($server);
        $game->point_to($receiver);
        $game->point_to($server);
        $game->point_to($receiver);
        $game->point_to($server);
        $game->point_to($receiver);
        $game->point_to($receiver);

        $this->assertEquals('Advantage, B', $game->score());
    }
        

    public function testReceiverWonGame() {
        $server = 'J';
        $receiver = 'B';

        $game = new Game($server, $receiver);
        $game->point_to($server);
        $game->point_to($server);
        $game->point_to($server);
        $game->point_to($receiver);
        $game->point_to($receiver);
        $game->point_to($receiver);
        $game->point_to($receiver);
        $game->point_to($receiver);

        $this->assertEquals('Game, B', $game->score());
    }
        
    public function testDeuce() {
        $server = 'J';
        $receiver = 'B';

        $game = new Game($server, $receiver);

        $game->point_to($server);
        $game->point_to($server);
        $game->point_to($server);
        $game->point_to($receiver);
        $game->point_to($receiver);
        $game->point_to($receiver);

        $this->assertEquals('Deuce', $game->score());
    }

    public function testScoresIsLoveForty(): void {
        $server = 'J';
        $receiver = 'B';

        $game = new Game($server, $receiver);
        $game->point_to($receiver);
        $game->point_to($receiver);
        $game->point_to($receiver);

        $this->assertEquals('Love, forty', $game->score());
    }

    public function testServerWonGame() {
        $server = 'J';
        $receiver = 'B';

        $game = new Game($server, $receiver);
        $game->point_to($server);
        $game->point_to($server);
        $game->point_to($server);
        $game->point_to($receiver);
        $game->point_to($server);

        $this->assertEquals('Game, J', $game->score());
    } 

    public function testServerHasAdvantage() {
        $server = 'J';
        $receiver = 'B';

        $game = new Game($server, $receiver);
        $game->point_to($server);
        $game->point_to($server);
        $game->point_to($server);
        $game->point_to($receiver);
        $game->point_to($receiver);
        $game->point_to($receiver);
        $game->point_to($server);

        $this->assertEquals('Advantage, J', $game->score());
    } 
}