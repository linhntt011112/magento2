<?php

namespace SimplifiedMagento\FirstModule\Console\Command;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloWorld extends Command{
    protected function configure() {
        $this->setName('training:hello_world')
             ->setDescription('this command prints out hello world')
             ->setAliases(array('hw'));
        // parent::configure();
        $this->setDefinition([
            new InputArgument("name", InputArgument::OPTIONAL, 'the name of the person', null, null)
        ]);
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        
        $output->writeln('Hello World, '.$input->getArgument('name'));
    }
}