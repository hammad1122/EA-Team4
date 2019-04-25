<?php defined('BASEPATH') OR exit('No direct script access allowed');



class Migration_Add_time_format_setting extends CI_Migration {
    public function up()
    {
        $this->load->model('settings_model');

        try
        {
            $this->settings_model->get_setting('time_format');
        }
        catch (Exception $exception)
        {
            $this->settings_model->set_setting('time_format', 'regular');
        }
    }

    public function down()
    {
        $this->load->model('settings_model');

        $this->settings_model->remove_setting('time_format');
    }
}
