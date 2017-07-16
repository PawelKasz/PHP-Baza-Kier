<?php

class Przyciski
{
    public $pozycja_x='20';
    public $pozycja_y='20';
    public $szerokosc='120';
    public $napis='Przycisk';
    public $kolor='green';
    public $adres='http://www.galaxyogame.da8.mintshost.com/test/one_shot.php';
    
    public function wyswietl()
    {
        echo '<a href="'.$this->adres.'" style="text-decoration:none;">'."\n";
        echo '<div class="przycisk" style="left:'.$this->pozycja_x.'px;top:'
            .$this->pozycja_y.'px;width:'.$this->szerokosc.'px;background-color:'
                .$this->kolor.';">'."\n";
                echo $this->napis."\n";
                echo '</div>'."\n";
                echo '</a>';
    }  
}

