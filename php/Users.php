<?php

class Users {
    private $Id_U;
    private $nom;
    private $prenom;
    private $Taille;
    private $Poids;
    private $abonnement;
    private $sport_pratique;
    private $genre;
    private $email;
    private $Mot_de_passe;
    private $photo;
    private $Roles = array();
    private $banni;

    // Constructeur
    public function __construct(int $Id_U, string $nom, string $prenom, int $Taille, float $Poids, string $abonnement, string $sport_pratique, string $genre, string $email, string $Mot_de_passe, string $photo, array $Roles, int $banni) {
        $this->Id_U = $Id_U;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->Taille = $Taille;
        $this->Poids = $Poids;
        $this->abonnement = $abonnement;
        $this->sport_pratique = $sport_pratique;
        $this->genre = $genre;
        $this->email = $email;
        $this->Mot_de_passe = $Mot_de_passe;
        $this->photo = $photo;
        $this->Roles = $Roles;
        $this->banni = $banni;
    }

    // Getters

    public function getIdU(): int {
        return $this->Id_U;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function getPrenom(): string {
        return $this->prenom;
    }

    public function getTaille(): int {
        return $this->Taille;
    }

    public function getPoids(): float {
        return $this->Poids;
    }

    public function getAbonnement(): string {
        return $this->abonnement;
    }

    public function getSportPratique(): string {
        return $this->sport_pratique;
    }

    public function getGenre(): string {
        return $this->genre;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getMotDePasse(): string {
        return $this->Mot_de_passe;
    }

    public function getPhoto(): string {
        return $this->photo;
    }

    public function getRoles(): array {
        return $this->Roles;
    }

    public function getBanni(): int {
        return $this->banni;
    }

    // Setters

    public function setNom(string $nom): void {
        $this->nom = $nom;
    }

    public function setPrenom(string $prenom): void {
        $this->prenom = $prenom;
    }

    public function setTaille(int $Taille): void {
        $this->Taille = $Taille;
    }

    public function setPoids(float $Poids): void {
        $this->Poids = $Poids;
    }

    public function setAbonnement(string $abonnement): void {
        $this->abonnement = $abonnement;
    }

    public function setSportPratique(string $sport_pratique): void {
        $this->sport_pratique = $sport_pratique;
    }

    public function setGenre(string $genre): void {
        $this->genre = $genre;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function setMotDePasse(string $Mot_de_passe): void {
        $this->Mot_de_passe = $Mot_de_passe;
    }

    public function setPhoto(string $photo): void {
        $this->photo = $photo;
    }

    public function setRoles(array $Roles): void {
        $this->Roles = $Roles;
    }

    public function setBanni(int $banni): void {
        $this->banni = $banni;
    }
}
