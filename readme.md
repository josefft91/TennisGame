# Tennis Game Scoring

This is a solution to the Tennis Game Scoring Problem using PHP. 

## About

This is to keep track of scores of a tennis game.

### Rules

1. A game is won by the first player to have won at least four points in total and at least two points more than the opponent.
2. The running score of each game is described in a manner peculiar to tennis: scores from zero to three points are described as "love", "fifteen", "thirty", and "forty" respectively.
3. If at least three points have been scored by each player, and the scores are equal, the score is "deuce".
4. If at least three points have been scored by each side and a player has one more point than his opponent, the score of the game is "advantage" for the player in the lead.
5. The serving player's score is always first, the receiving player's score is second.

## Requirements
You are required to have PHP 7.1 or higher installed on the command line you can check this by running the following command.

```bash 
php -v
```

If it is not installed instructions on how to install for your system can be found here: https://www.php.net/manual/en/install.php

Composer was used to install PHPUnit - you will have to run the following command if you wish to run the tests.

```bash
composer install
```

## Usage
If PHP and PHPUnit are correctly installed you should be able to run the following in order to run the tests.

```bash 
php ./vendor/bin/phpunit --testdox tests
```
