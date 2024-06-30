<?php

namespace CloudStorage\FileSystems\Files\Images;

use CloudStorage\FileSystems\Files\Contract\ImageContract;
use CloudStorage\Mail\Mailer;


class Jpeg implements ImageContract
{
    function getDimension()
    {
        (new Mailer())->sentMail();
        return "100x100\n";
    }
}