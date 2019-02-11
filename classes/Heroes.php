<?php

    namespace App\Classes;

    require_once 'interfaces/Personnage.php';

    use App\Interfaces\Personnage;

    abstract class Heroes implements Personnage
    {

        public $name;
        protected $vie;
        protected $attaque = 5;
        protected $defense = 3;

        public function __construct(string $name, int $vie)
        {
            $this->name = $name;
            $this->vie = $vie;
        }

        public function _setVie(int $vie)
        {
            $this->vie = $vie;
        }

        public function _getVie() : int
        {
            return $this->vie;
        }

        public function _getAttaque() : int
        {
            return $this->attaque;
        }

        public function _getDefense() : int
        {
            return $this->defense;
        }

        public function lancerAttaque() : int
        {
            if (6 === rand(1, 6)) {
                return $this->attaqueSpecial();
            }
            return $this->attaqueDeBase();
        }

        private final function attaqueDeBase() : int
        {
            return $this->attaque;
        }

        private final function attaqueSpecial() : int
        {
            return $this->attaque * 2;
        }

        public abstract function afficherAttaque(Armes $armes, Heroes $defenseur) : string;

    }