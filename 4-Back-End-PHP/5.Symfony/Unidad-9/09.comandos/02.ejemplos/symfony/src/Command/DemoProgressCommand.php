<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'demo:progress',
    description: 'Add a short description for your command',
)]
class DemoProgressCommand extends Command
{
    protected function configure(): void
    {
        $this
            ->setHelp('This demo shows the progress on screen, no input needed..')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        
        $progressBar = new ProgressBar($output, 50);
        $progressBar->start();
        $i = 0;
        while($i++ < 50){
            $progressBar->advance();
        }
        $progressBar->finish();
        $io->success('You have a new command! Now make it your own! Pass --help to see your options.');

        return Command::SUCCESS;
    }
}
