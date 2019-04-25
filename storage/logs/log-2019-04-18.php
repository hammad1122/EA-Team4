<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-04-18 02:23:22 --> Email could not been sent. Mailer Error (Line 179): Could not instantiate mail function.
ERROR - 2019-04-18 02:23:22 --> #0 C:\Users\kools\Desktop\wamp64\www\EA\application\controllers\Appointments.php(575): EA\Engine\Notifications\Email->sendAppointmentDetails(Array, Array, Array, Array, Array, Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Url), Object(EA\Engine\Types\Email), Object(EA\Engine\Types\Text))
#1 [internal function]: Appointments->ajax_register_appointment()
#2 C:\Users\kools\Desktop\wamp64\www\EA\system\core\CodeIgniter.php(532): call_user_func_array(Array, Array)
#3 C:\Users\kools\Desktop\wamp64\www\EA\index.php(353): require_once('C:\\Users\\kools\\...')
#4 {main}
