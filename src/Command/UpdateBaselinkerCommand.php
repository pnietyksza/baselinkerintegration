<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use App\Service\AkeneoService;

#[AsCommand(
    name: 'updateBaselinker',
    description: 'Update baselinker',
)]
class UpdateBaselinkerCommand extends Command
{
    public function __construct(
        private AkeneoService $akeneoService
    )
    {
        parent::__construct();
    }

    protected function configure(): void
    {
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        
        $this->akeneoService->authorization();






        $io->success('Success');

        return Command::SUCCESS;
    }
}
