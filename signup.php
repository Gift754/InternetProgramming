<?php
require 'classautoload.php';

$Objlayout->header($conf);
$Objlayout->navbar($conf);
$Objlayout->banner($conf);
$Objlayout->form_content($conf, $Objforms);
$Objlayout->footer($conf);