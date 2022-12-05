<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
// service
use App\Service\InitializationDataBase;

#[AsCommand(
    name: 'app:initialization-database',
    description: 'Add a short description for your command',
)]
class UploadDataBaseCommand extends Command
{
    protected static $defaultName = '';

    private $uploadDataBase;

    public function __construct(InitializationDataBase  $uploadDataBase){
        $this->uploadDataBase = $uploadDataBase;
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln([
            'Initialization Data Base',
            '========================'
        ]);
        $output->writeln($this->uploadDataBase->uploadDataInitial());

        return Command::SUCCESS;
    }
}
