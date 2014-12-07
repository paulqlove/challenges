<?php
	//blackjack game
	//4 different suits of cards - spade, heart, club, diamonds
	$suits = ['Spade','Heart','Club','Diamond'];

	//EACH SUIT has  are A(1),2,3,4,5,6,7,8,9,10 && (J,Q,K,A)
	$deck1 = ['A',2,3,4,5,6,7,8,9,10,'J','Q','K'];
	//The total count of cards in each deck is 13 and 4 suits = 52cards
	print_r($suits);
	print_r($deck1);

	//Build a deck of cards
	function buildDeck($suits,$deck1){
		
	}
	
	//Player is given 1000 Chips
	$chipTotal = 1000;
	//if Player chips are less than 1 
	//echo "Game over"
	//echo Would you Like to start over? YES or NO
	//if no , then exit game
	//if yes, then reset chip amount to 1000
	
	//BETTING CHIPS
	//Ask Player How many chips they want to bet
	fwrite(STDOUT, "How many chips would you like to bet?");
	//Player will enter in amount of chips
	//make variable that is amount of player BET
	$player1 = trim(fgets(STDIN));
	//subtract amount from total amount of chips
	$new_chipTotal = $chipTotal - $player1;
	echo $new_chipTotal;
	
	//check if bet is lesser than 25
	if ($player1 < 25) {
		echo "Min bet is 25 chips: Please enter another amount.";
	}else{
		//run the deal function
	}

	//if bet is true then deal cards
	//if player entered in less than 25
	//echo "Min bet is $25: Please enter amount again"
	//run the BET function 

	//DEALING CARDS
	//the players are dealt 2 cards face up
	//each card is it's own variable
	//each player is dealt one card before getting second card
	//dealer is dealt  two cards
	//one dealer card is face up and the other is down
	//need to two variables for each dealer card - hidden/show
	//echo the show card

	//if player has Ace and 10,J,Q,K it is BlackJack and Player wins

	//if player doesn't have Black Jack check if the Dealer does.
	//if Dealer has BlackJack . Dealer wins

	//if player && Dealer do not have BlackJack.
	
	//HIT OR STAY
	//Option to player to STAY or HIT
	//HIT will draw another card from the deck of cards
	//STAY will keep the players cards. 
	
	//function STAY
	//once the player chooses to STAY
	//check dealers sum of cards
	//if dealers sum of cards is greater than players sum then dealer wins
	//if dealers sum of cards is less than players
	//Dealer will draw cards from deck until dealer sum is greater than player.
	//if dealer sum is greater or equal to 22 then dealer bust and player wins
	//echo new chip total
	
	
	//function HIT
	//once the player chooses to HIT
	//echo How much they would like to bet. 
	//player enters in amount
	//subtract this amount from total number of chips variable
	//add this amount to the variable BET
	//draw card from the deck and add total of players sum of cards
	//echo the new sum
	
	
	//check if new sum is equal to or greater than 21. 
	//if it is then player bust and loses money
	//if players sum of cards is less than 21 
	//ask player to HIT or STAY
	//run the function that the player chose

	
