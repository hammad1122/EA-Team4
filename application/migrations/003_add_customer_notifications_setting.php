<?php defined('BASEPATH') OR exit('No direct script access allowed');



class Migration_Add_customer_notifications_setting extends CI_Migration {
    public function up()
    {
        $this->load->model('settings_model');

        try
        {
            $this->settings_model->get_setting('customer_notifications');
        }
        catch (Exception $exception)
        {
            $this->settings_model->set_setting('customer_notifications', '1');
        }
    }

    public function down()
    {
        $this->load->model('settings_model');

        $this->settings_model->remove_setting('customer_notifications');
    }
}
