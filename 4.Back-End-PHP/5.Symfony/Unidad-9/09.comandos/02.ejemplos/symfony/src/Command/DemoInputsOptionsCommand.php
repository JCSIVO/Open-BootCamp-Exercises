<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Console\Question\Question;

#[AsCommand(
    name: 'demo:inputs-options',
    description: 'Add a short description for your command',
)]
class DemoInputsOptionsCommand extends Command
{
    protected function configure(): void
    {
        $this
            ->setHelp('This command asks the user a simple question.')
            ->setDefinition([
                new InputOption('foo', 'f'),
                new InputOption('bar', 'b', InputOption::VALUE_REQUIRED, 'How many times should the message be printed', 1),
                new InputOption('cat', 'c', InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY),
                new InputOption('sev', 's', InputOption::VALUE_OPTIONAL),
            ])
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $output->writeln('Foo: '. $input->getOption('foo'));
        $output->writeln('Bar: '. $input->getOption('bar'));
        $cat = $input->getOption('cat');
        foreach($cat as $key => $value){
            $output->writeln('cat'.$value);
        }

        $io->success('You have a new command! Now make it your own! Pass --help to see your options.');

        return Command::SUCCESS;
    }
}
