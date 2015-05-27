<?php namespace SimplyReactive\TheGreatValley;

use Symfony\Component\Process\Process;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class InitCommand extends Command {

	/**
	 * Configure the command options.
	 *
	 * @return void
	 */
	protected function configure()
	{
		$this->setName('init')
                  ->setDescription('Create a stub TheGreatValley.yaml file');
	}

	/**
	 * Execute the command.
	 *
	 * @param  \Symfony\Component\Console\Input\InputInterface  $input
	 * @param  \Symfony\Component\Console\Output\OutputInterface  $output
	 * @return void
	 */
	public function execute(InputInterface $input, OutputInterface $output)
	{
		if (is_dir(thegreatvalley_path()))
		{
			throw new \InvalidArgumentException("The Great Valley has already been initialized.");
		}

		mkdir(thegreatvalley_path());

		copy(__DIR__.'/stubs/TheGreatValley.yaml', thegreatvalley_path().'/TheGreatValley.yaml');
		copy(__DIR__.'/stubs/after.sh', thegreatvalley_path().'/after.sh');
		copy(__DIR__.'/stubs/aliases', thegreatvalley_path().'/aliases');

		$output->writeln('<comment>Creating TheGreatValley.yaml file...</comment> <info>✔</info>');
		$output->writeln('<comment>TheGreatValley.yaml file created at:</comment> '.thegreatvalley_path().'/TheGreatValley.yaml');
	}

}
