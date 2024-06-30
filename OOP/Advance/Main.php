<?php

namespace CloudStorage;
include "AutoLoader.php";

use CloudStorage\FileSystems\Files\Images\Jpeg;
use CloudStorage\FileSystems\FileSystem;
use CloudStorage\Mail\Mailer;

class Main
{
    function __construct()
    {
        $mailer = new Mailer();
        $mailer->sentMail();
        $scanning = new FileSystem();
        $scanning->scanner();
        $Jpeg = new Jpeg();
        echo $Jpeg->getDimension();
    }
}

new Main();