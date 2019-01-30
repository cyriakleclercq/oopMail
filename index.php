<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 30/01/2019
 * Time: 09:23
 */

require 'classes/mail.php';

$mail = new mail();

$mail -> setText("il etait une fois la vie");

$mail-> setSujet("test de mail");

$mail->envoi();
