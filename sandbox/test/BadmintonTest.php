<?php
namespace App;
use PHPUnit\Framework\TestCase;
class BadmintonTest extends TestCase
{
    public function test_set_commence_avecscore_0_0()
    {
        $player1 = new Player("John");
        $player2 = new Player("Bill");

        $set = new BadmintonSet($player1,$player2);

        self::assertEquals(0,$set->getScore($player1));
        self::assertEquals(0,$set->getScore($player2));


    }

    public function test_joueur1_gagnepremierpoint_scorecourantjoueur1_1()
    {
        $player1 = new Player("John");
        $player2 = new Player("Bill");

        $set = new BadmintonSet($player1,$player2);

        $set->playerWinPoints($player1,1);

        self::assertEquals(1,$set->getScore($player1));
        self::assertEquals(0,$set->getScore($player2));
    }

    public function test_joueur2_gagnedeuxiemepoint_scorescourantjoueurs_1_1()
    {
        $player1 = new Player("John");
        $player2 = new Player("Bill");

        $set = new BadmintonSet($player1,$player2);

        $set->playerWinPoints($player1,1);
        $set->playerWinPoints($player2,1);

        self::assertEquals(1,$set->getScore($player1));
        self::assertEquals(1,$set->getScore($player2));
    }

    public function test_joueur1_14_Joueur2_12_joueur1gagnepoint_gagneset()
    {
        $player1 = new Player("John");
        $player2 = new Player("Bill");

        $set = new BadmintonSet($player1,$player2);

        $set->playerWinPoints($player1,14);
        $set->playerWinPoints($player2,12);

        self::assertEquals(14,$set->getScore($player1));
        self::assertEquals(12,$set->getScore($player2));

        $set->playerWinPoints($player1,1);

        self::assertEquals($player1,$set->getWinner());

    }

    public function test_joueur1_15_Joueur2_14_pas_de_gagnant()
    {
        $player1 = new Player("John");
        $player2 = new Player("Bill");

        $set = new BadmintonSet($player1,$player2);

        $set->playerWinPoints($player1,15);
        $set->playerWinPoints($player2,14);

        self::assertNull($set->getWinner());
    }

    public function test_joueur1_14_Joueur2_16_victoire_joueur_2()
    {
        $player1 = new Player("John");
        $player2 = new Player("Bill");

        $set = new BadmintonSet($player1,$player2);

        $set->playerWinPoints($player1,14);
        $set->playerWinPoints($player2,16);

        self::assertEquals($player2,$set->getWinner());

    }

    public function test_joueur1_19_Joueur2_20_victoire_joueur_2()
    {
        $player1 = new Player("John");
        $player2 = new Player("Bill");

        $set = new BadmintonSet($player1,$player2);

        $set->playerWinPoints($player1,19);
        $set->playerWinPoints($player2,20);

        self::assertEquals($player2,$set->getWinner());
    }



}