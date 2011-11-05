<?php

namespace Stof\AdvancedEncoderBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Stof\AdvancedEncoderBundle\DependencyInjection\Compiler\SecurityEncoderFactoryPass;

class StofAdvancedEncoderBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new SecurityEncoderFactoryPass());
    }
}
