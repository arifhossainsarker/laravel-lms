<?php

use Flasher\Prime\FlasherInterface;

function Successfully_msg($msg, FlasherInterface $flasher)
{
    $flasher->addSuccess($msg);
}
