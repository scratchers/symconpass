<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SpeakCommand extends Command
{

  protected function configure(){

    $this->setName('speak') // ./demo speak
         ->setDescription('Speak a message.');

  }

  protected function execute(InputInterface $input, OutputInterface $output){

    exec('espeak "hello, how are you"');

  }

}
