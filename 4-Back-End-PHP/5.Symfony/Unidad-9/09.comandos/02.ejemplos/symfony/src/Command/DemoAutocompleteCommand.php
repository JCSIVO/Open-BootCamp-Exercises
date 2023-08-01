<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'demo:autocomplete',
    description: 'Add a short description for your command',
)]
class DemoAutocompleteCommand extends Command
{
    protected function configure(): void
    {
        $this
            ->setHelp('This command asks the user and autocomplete the answer.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $bundles = ['AcmeDemoBundle', 'AcmeBlogBundle', 'AcmeStoreBundle'];

        $helper = $this->getHelper('question');
        $question = new Question('Please enter the name of the bundle:', 'AcmeDemoBundle');
        $question->setAutocompleterValues($bundles);
        $bundleName = $helper->ask($input, $output, $question);
        $output = $output->writeln('Your bundle is: '. $bundleName);

        $io->success('You have a new command! Now make it your own! Pass --help to see your options.');

        return Command::SUCCESS;
    }
}
