<?php

namespace FOS\AdvancedEncoderBundle\Security\Encoder;

use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * @author Christophe Coevoet <stof@notk.org>
 */
interface EncoderAwareInterface
{
    /**
     * Gets the name of the encoder used to encode the password.
     *
     * If the method returns null, the standard way to retrieve the encoder
     * will be used instead.
     *
     * @return string
     */
    function getEncoderName();
}
