<?php

use Twig\Node\Expression\Binary\AndBinary;

class_exists('Twig\Node\Expression\Binary\AndBinary');

@trigger_error('Using the "Twig_Node_Expression_Binary_And" class is deprecated since Twig version 2.7, use "Twig\Node\Expression\Binary\AndBinary" instead.', \E_USER_DEPRECATED);

if (false) {
    /** @deprecated since Twig 2.7, use "Twig\Node\Expression\Binary\AndBinary" instead */
    class Twig_Node_Expression_Binary_And extends AndBinary
    {
    }
}
