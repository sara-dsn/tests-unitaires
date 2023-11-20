<?php
use PHPUnit\Framework\TestCase;
require 'Model/User.php';
use App\Model\User;

class UserTest extends TestCase
{

    // Les fonctions test seront définies ici

    public function testAfficherNom(){ 

    $user = new User(23, 'sara');

    $this->assertIsString($user->afficherNom());

    // vérifier que la fonction  contient le nom d'utilisateur (ici 'sara):
    $this->assertStringContainsStringIgnoringCase('sara', $user->afficherNom());

    // verifier que le msg retourné par la fonction est correct:
    $this->assertEquals("Je m'appelle sara.",$user->afficherNom(),"Le nom de l'utulisateur n'est pas correct");

    }
}
?>
