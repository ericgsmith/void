<?php

namespace Ericgsmith\Void\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class YellCommand provides a command to yell into the void.
 *
 * @package Ericgsmith\Void\Command
 */
class YellCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('yell')
            ->setDescription('Yell into the void.')
            ->setHelp('This command allows you to yell into the void.')
            ->addArgument('scream', InputArgument::REQUIRED, 'Something to scream into the void');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln($this->getQuote());
        $output->writeln('Sometimes yelling into the void helps.');
    }

    /**
     * Get a quote to return to the user.
     *
     * @return string
     *   A bright and cheerful quote to brighten the day.
     */
    protected function getQuote()
    {
        $quotes = [
            'We’ve known for a long time that it was no longer possible to overturn this world, nor reshape it, nor head off its dangerous headlong rush. There’s been only one possible resistance: to not take it seriously.',
            'It could always get worse',
            'It is less mortifying to believe one\'s self unpopular than insignificant, and vanity prefers to assume that indifference is a latent form of unfriendliness.',
            'If you once realize that to-morrow, if not to-day, you will die and nothing will be left of you, everything becomes insignificant',
            'How small a single life seems in this vast universe.',
            'Everybody is living for a purpose, you might turn out to be significant or insignificant depending on the kind of message you are feeding the world with.',
        ];
        $key = array_rand($quotes);
        return $quotes[$key];
    }
}
