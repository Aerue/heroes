<?php

    namespace App\Interfaces;


    use App\Classes\Armes;
    use App\Classes\Heroes;

    interface Personnage
    {

        public function afficherAttaque(Armes $armes, Heroes $defenseur) : string;

    }