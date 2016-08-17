<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SpeakCommand extends Command
{

  protected function configure(){

    $this->setName('speak') // ./demo speak
         ->setDescription('Speak a message.')
         ->addArgument('message', InputArgument::OPTIONAL, 'What message should I speak?', 'hello how are you');

  }

  protected function execute(InputInterface $input, OutputInterface $output){

    exec('espeak "'.$input->getArgument('message').'"');

    $output->writeln('All done.');

  }

}
