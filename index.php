<?php
    require 'classautoload.php';

    // Using the class methods
    print $layout->header($conf);
    print $class->today();
    $form->signup();
    print $layout->footer($conf);