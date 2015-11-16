<?php

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends \Behat\MinkExtension\Context\MinkContext implements Behat\Symfony2Extension\Context\KernelAwareContext
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
