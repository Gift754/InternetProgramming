<?php
require 'classautoload.php';

$ObjAuth->signin();

$ObjLayout->header();
$ObjLayout->navbar();
$ObjLayout->banner();
$ObjLayout->form_content();
$ObjLayout->footer();