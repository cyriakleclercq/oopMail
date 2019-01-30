<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 30/01/2019
 * Time: 09:17
 */

class mail
{
    private $diffuseur;
    private $recepteur;
    private $recepteur_annexe = [];
    private $text;
    private $sujet;

    public function __construct()
    {
        $this->diffuseur = "cyriakleclercq@gmail.com";
        $this->recepteur = "dd.spilmont59212@gmail.com";

    }

    public function setRecepteurAnnexe($recepteur_annexe)
    {
        $this->recepteur_annexe = $recepteur_annexe;
    }

    public function setText($text)
    {
        $this->text = $text;
    }

    public function setSujet($sujet)
    {
        $this->sujet = $sujet;
    }

    public function envoi() {

        $headers = 'From:'.$this->diffuseur . "\r\n" .
            'Reply-To:'.$this->diffuseur . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        mail($this->recepteur,$this->sujet, $this->text, $headers);
        echo"mail envoyé";
    }
}