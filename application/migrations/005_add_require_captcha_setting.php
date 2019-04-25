<?php defined('BASEPATH') OR exit('No direct script access allowed');



class Migration_Add_require_captcha_setting extends CI_Migration {
    public function up()
    {
        $this->load->model('settings_model');

        try
        {
            $this->settings_model->get_setting('require_captcha');
        }
        catch (Exception $exception)
        {
            $this->settings_model->set_setting('require_captcha', '1');
        }
    }

    public function down()
    {
        $this->load->model('settings_model');

        $this->settings_model->remove_setting('require_captcha');
    }
}
