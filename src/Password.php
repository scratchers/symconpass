<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;

class Password extends Command {

	protected function configure(){
		$this->setName('password') // ./demo speak
			->setDescription('Get/Set a Password.');
// 			->addArgument('password', InputArgument::OPTIONAL, 'What message should I speak?');

	}

	public function execute(InputInterface $input, OutputInterface $output){
		$helper = $this->getHelper('question');
		$question = new Question('What is the fake password?');
		$question->setHidden(true);
		$question->setHiddenFallback(false);

		$password = $helper->ask($input, $output, $question);
		$output->writeln("Your password is: <options=reverse>$password</>");
	}
}
