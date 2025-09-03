<?php
    require 'ClassAutoLoad.php';

    // Using the class methods
    print $layout->header($conf);
    print $class->today();
    $form->signin();
    print $layout->footer($conf);