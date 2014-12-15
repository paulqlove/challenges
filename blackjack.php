<?php
	//blackjack game
	//4 different suits of cards - spade, heart, club, diamonds
	$suits = ['Spades','Hearts','Clubs','Diamonds'];
	
	//EACH SUIT has  are A(1),2,3,4,5,6,7,8,9,10 && (J,Q,K,A)
	$cardNumber =  ['Ace' ,'2','3','4','5','6','7','8','9','10','Jack','Queen','King'];
	//The total count of cards in each deck is 13 and 4 suits = 52cards
	// $backupArray = [ 
	// 'Ace' => ['name' => 'Ace','value' => 1],
	// '2' => ['name' => '2','value' => 2 ],
	// '3' => ['name' => '3','value' => 3],
	// '4' => ['name' => '4','value' => 4],
	// '5' => ['name' => '5','value' => 5],
	// '6' => ['name' => '6','value' => 6],
	// '7' => ['name' => '7','value' => 7],
	// '8' => ['name' => '8','value' => 8],
	// '9' => ['name' => '9','value' => 9],
	// '10' => ['name' => '10','value' => 10],
	// 'Jack' => ['name' => 'Jack','value' => 10],
	// 'Queen' => ['name' => 'Queen','value' => 10],
	// 'King' => ['name' => 'King','value' => 10]
	// ];

	//Build a deck of cards
	function buildDeck($suits,$cardNumber){
		
		foreach ($suits as $suit) {
			
				foreach ($cardNumber as $value) {
					$card = $value . " of " . $suit . PHP_EOL;
					$deckArray[] = $card; 
				}				
		}	
		return $deckArray;
	} 
	//function HIT this function returns a card off the top off the deck when player or dealer hits  
	function nextCard($fullDeck){

		$newCard = array_pop($fullDeck);
		return $newCard;

	}
 	//function for player Action
 	function playerAction($hit_or_stay_Answer,&$playerHand,&$fullDeck){
		do{
			$hit_or_stay_Question = fwrite(STDOUT, "Would you Like to (H)it or (S)tay?" . PHP_EOL);
			$hit_or_stay_Answer = strtoupper(trim(fgets(STDIN)));
				
				if ($hit_or_stay_Answer == 'H') {
					$playerHits = nextCard($fullDeck);//pop last card on deck to a variable
					array_pop($fullDeck);
					//adds the new card to  player hand 
					$playerHand .= $playerHits;//push last card into the array
					echo "Your new hand " . PHP_EOL .  $playerHand . PHP_EOL;
				}
				elseif ($hit_or_stay_Answer == 'S') {
					 echo "You decided to stay. Your hand is " . PHP_EOL . $playerHand . PHP_EOL;
				}
			} while ($hit_or_stay_Answer !== 'S');
		}
	//function for dealer drawing cards
		function dealerAction(&$fullDeck,&$dealerHand){

		}
 	//shuffle Deck of cards
	$fullDeck = buildDeck($suits,$cardNumber);
 	shuffle($fullDeck);
 	nextCard($fullDeck);
 	//print_r($fullDeck);//for testing purposes
	$firstCard_Player1 = array_pop($fullDeck);
	$firstCard_Dealer = array_pop($fullDeck);
	$secondCard_Player1 = array_pop($fullDeck);
	$secondCard_Dealer =array_pop($fullDeck);
	//print_r($fullDeck);//for testing purposes
	//Player one hand
	echo "Your Hand" . PHP_EOL;
	$playerHand = $firstCard_Player1 . $secondCard_Player1;
	print_r($playerHand);

	//dealer hand
	echo PHP_EOL . "Dealers hand" . PHP_EOL ;
	$dealerHand = $firstCard_Dealer . $secondCard_Dealer ;
	print_r($dealerHand);
	//Ask player if they want to hit or stay
	//print_r($playerHand);
	//print_r($fullDeck);
	//DEALING CARDS
	playerAction($hit_or_stay_Answer,$playerHand,$fullDeck);

	
	
	//the players are dealt 2 cards face up
	//each card is it's own variable
	//each player is dealt one card before getting second card
	//dealer is dealt  two cards
	//one dealer card is face up and the other is down
	//need to two variables for each dealer card - hidden/show
	//echo the show card
	//print_r($fullDeck);//for testing
	//array_pop($fullDeck);
	
	//print_r($fullDeck); 


	//print_r($fullDeck);//for testing
	// $newCard = hitPlayer1($fullDeck);
	// print_r($newCard);
	// print_r($fullDeck);//for testting
	// $popNewCard = array_pop($fullDeck);
	// print_r($fullDeck);
	

	//function STAY
	//once the player chooses to STAY
	//check dealers sum of cards
	//if dealers sum of cards is greater than players sum then dealer wins
	//if dealers sum of cards is less than players
	//Dealer will draw cards from deck until dealer sum is greater than player.
	//if dealer sum is greater or equal to 22 then dealer bust and player wins
	//echo new chip total
	
	
	//echo How much they would like to bet. 
	//player enters in amount
	//subtract this amount from total number of chips variable
	//add this amount to the variable BET
	//draw card from the deck and add total of players sum of cards
	//echo the new sum

	

	
	//BETTING CHIPS
	//Ask Player How many chips they want to bet
		//fwrite(STDOUT, "How many chips would you like to bet?" . PHP_EOL);
	//Player will enter in amount of chips
	//make variable that is amount of player BET
			//$player1 = trim(fgets(STDIN)) . PHP_EOL;
	//subtract amount from total amount of chips
	//$bet_Amount = $chipTotal - $player1;
	//echo $bet_Amount . " chips left" . PHP_EOL;
	
	//check if bet is less than 25
	// //if ($player1 < 25) {
	// 	echo "Min bet is 25 chips: Please enter another amount.";
	// 	$player1 = trim(fgets(STDIN)) . PHP_EOL;
	// }else{
	// 	//run the deal function
	// }

	//if bet is true then deal cards
	//if player entered in less than 25
	//echo "Min bet is $25: Please enter amount again"
	//run the BET function 


	//if player has Ace and 10,J,Q,K it is BlackJack and Player wins

	//if player doesn't have Black Jack check if the Dealer does.
	//if Dealer has BlackJack . Dealer wins

	//if player && Dealer do not have BlackJack.
	
	//HIT OR STAY
	//Option to player to STAY or HIT
	//HIT will draw another card from the deck of cards
	//STAY will keep the players cards. 
	
	
	
	//check if new sum is equal to or greater than 21. 
	//if it is then player bust and loses money
	//if players sum of cards is less than 21 
	//ask player to HIT or STAY
	//run the function that the player chose
	
	
	//Player is given 1000 Chips
	$chipTotal = 1000;
	//if Player chips are less than 1 
	//echo "Game over"
	//echo Would you Like to start over? YES or NO
	//if no , then exit game
	//if yes, then reset chip amount to 1000
