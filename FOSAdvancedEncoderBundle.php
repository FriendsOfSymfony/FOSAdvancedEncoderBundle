<?php

namespace FOS\AdvancedEncoderBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use FOS\AdvancedEncoderBundle\DependencyInjection\Compiler\SecurityEncoderFactoryPass;

class FOSAdvancedEncoderBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new SecurityEncoderFactoryPass());
    }
}
