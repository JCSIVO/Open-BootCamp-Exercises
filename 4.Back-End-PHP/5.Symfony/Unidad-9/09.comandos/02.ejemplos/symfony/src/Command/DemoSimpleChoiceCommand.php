<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'demo:simple-choice',
    description: 'Add a short description for your command',
)]
class DemoSimpleChoiceCommand extends Command
{
    protected function configure(): void
    {
        $this
            ->setHelp('This command asks the user a simple question.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $helper = $this->getHelper('question');
        $question = new ChoiceQuestion(
            'Please select your favorite colors (Defaults to red and blue)',
            ['red', 'blue', 'yellow'],
            '0,1'
        );
        $question->setMultiselect(true);
        $colors = $helper->ask($input, $output, $question);
        $output = $output->writeln('You have just selected: ' . implode(', ', $colors));

        $io->success('You have a new command! Now make it your own! Pass --help to see your options.');

        return Command::SUCCESS;
    }
}
