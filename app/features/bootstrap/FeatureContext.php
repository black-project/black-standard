<?php

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements \Behat\Behat\Context\Context
{
    protected $kernel;

    public function setKernel(\Symfony\Component\HttpKernel\KernelInterface $kernelInterface)
    {
        $this->kernel = $kernelInterface;
    }

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {

    }
}
