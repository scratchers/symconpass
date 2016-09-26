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

		$formatter = $this->getHelper('formatter');
		$formattedLine = $formatter->formatSection(
			'Password',
			"Your password is: <options=reverse>$password</>"
		);
		$output->writeln($formattedLine);

		$errorMessages = array('Error!', 'Something went wrong');
		$formattedBlock = $formatter->formatBlock($errorMessages, 'error');
		$output->writeln($formattedBlock);
	}
}
