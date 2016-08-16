<?php

use Symfony\Component\Console\Command\Command;

class SpeakCommand extends Command
{

  protected function configure(){

    $this->setName('speak') // ./demo speak
         ->setDescription('Speak a message.');

  }

  protected function execute(){

    exec('espeak "hello, how are you"');

  }

}
