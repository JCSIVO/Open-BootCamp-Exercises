<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ConfirmationQuestion;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Console\Question\Question;

#[AsCommand(
    name: 'demo:confirmation-question',
    description: 'Add a short description for your command',
)]
class DemoConfirmationQuestionCommand extends Command
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
        $question1 = new ConfirmationQuestion('Are you sure that you want to do the operation: ', false, '/^(y|s)/i');
        $question2 = new ConfirmationQuestion('Continue with this action? ', false);

        if(!$helper->ask($input, $output, $question1)){
            $output->writeln('you clicked no');
        }else{
            $output->writeln('you clicked yes');
        }

        $io->success('You have a new command! Now make it your own! Pass --help to see your options.');

        return Command::SUCCESS;
    }
}
