<?php

require('smtp-validate-email.php');

$from = 'no-reply@holatrabajo.com'; // for SMTP FROM:<> command
$emails = ['someone@holatrabajo.com','contacto@holatrabajo.com'];


$validator = new SMTP_Validate_Email($emails, $from);
$smtp_results = $validator->validate();

// or passing to the validate() method
// $validator = new SMTP_Validate_Email();
// $smtp_results = $validator->validate($emails, $from);

var_dump($smtp_results);
