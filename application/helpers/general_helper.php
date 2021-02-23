<?php

defined('BASEPATH') or exit('No direct script access allowed');


function app_generate_hash()
{
    return md5(rand() . microtime() . time() . uniqid());
}

?>