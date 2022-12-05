<?php

namespace App\Command;

use App\Entity\Grade;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\TableCell;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Console\Helper\Table;

#[AsCommand(
    name: 'reports:notes',
    description: 'Add a short description for your command',
)]
class ReportsNotesCommand extends Command
{

    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct();
        $this->entityManager = $entityManager;
    }

    protected function configure(): void
    {
        $this
            ->addArgument('gradeName', InputArgument::REQUIRED, 'Grade Name')
            ->addArgument('startedOn', InputArgument::REQUIRED, 'Started on (yyyy-mm-dd)')
            ->addArgument('finishOn', InputArgument::REQUIRED, 'Finish on (yyyy-mm-dd)');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        // 
        $gradeName = $input->getArgument('gradeName');
        $output->writeln('gradeName: ' . $gradeName);
        $startedOn = $input->getArgument('startedOn');
        $output->writeln('startedOn: ' . $startedOn);
        $finishOn = $input->getArgument('finishOn');
        $output->writeln('finishOn: ' . $finishOn);
        //
        $subjects = $this->entityManager
            ->getRepository(Grade::class)
            ->getAverageNoteGrade($gradeName, $startedOn, $finishOn);

        $rows = [];
        foreach($subjects as $subject){
            $rows[] = [$subject['name'], $subject['average_note']];
        }

        $table = new Table($output);

        if(!empty($rows)){
            $table->setHeaders([
                [new TableCell('Grade; '.$gradeName.' ---- Date:'. $startedOn.' / '. $finishOn, ['colspan' => 2])],
                ['Subject', 'Note Average']
            ]);
            $table->setRows($rows);
        }else{
            $table->setHeaders(['No records']);
        }

        $table->render();
        $io->success('You have a new command! Now make it your own! Pass --help to see your options.');

        return Command::SUCCESS;
    }
}
