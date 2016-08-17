# [symfony console][1] - [laracast demo][2]

## Quesitons

Why doesn't the warning appear in PHP 5.5.9?

    git checkout 1e43177
    ./demo

> PHP Warning:  Declaration of SpeakCommand::execute() should be compatible with Symfony\Component\Console\Command\Command::execute(Symfony\Component\Console\Input\InputInterface $input, Symfony\Component\Console\Output\OutputInterface $output) in /home/xenial/symcon/src/SpeakCommand.php on line 21

Warning shows up just fine with `PHP 7.0.8-0ubuntu0.16.04.2 (cli) ( NTS )`

  [1]:http://symfony.com/doc/current/components/console.html
  [2]:https://laracasts.com/series/discover-symfony-components/episodes/1
