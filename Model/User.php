<?php
namespace App\Model;
// la class User contient age,nom et fv(films_favoris):
class User
{
    public int $age;
    public array $films_favoris =[];
    public string $nom;

//  et 4 méthodes ( afficheAge, afficheNom, ajoutFv,suppFv):
public function __construct(int $age, string $nom){
    $this->age =$age;
    $this->nom =$nom;
}
public function afficherNom(): string{
    return "Je m'appelle ".$this->nom." et j'ai ".$this->age." ans.";
}
public function afficherAge(): string{
    return "Je 'ai  ".$this->age." ans.";
}
public function ajouterFilmsFavoris(string $film): bool{
    $this->films_favoris[]=$film;
    return true;
}
public function supprimerFilmsFavoris(string $films):bool{
    if(!in_array($film, $this->films_favoris)) throw new InvalidArgumentException("Film inconnu: ".$film);
    unset($this->films_favoris[array_search($film, $this->films_favoris)]);
    return true;
}
}
?>