<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-09-29 15:26:55 --> Email could not been sent. Mailer Error (Line 179): Could not instantiate mail function.
ERROR - 2018-09-29 15:26:55 --> #0 C:\xampp\htdocs\appointment\application\controllers\Appointments.php(575): EA\Engine\Notifications\Email->sendAppointmentDetails(Array, Array, Array, Array, Array, Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Url), Object(EA\Engine\Types\Email), Object(EA\Engine\Types\Text))
#1 C:\xampp\htdocs\appointment\system\core\CodeIgniter.php(532): Appointments->ajax_register_appointment()
#2 C:\xampp\htdocs\appointment\index.php(353): require_once('C:\\xampp\\htdocs...')
#3 {main}
