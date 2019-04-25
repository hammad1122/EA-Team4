<?php defined('BASEPATH') OR exit('No direct script access allowed');



/**
 * Class Consent
 *
 * Handles user consent related operations.
 */
class Consents extends CI_Controller {
    /**
     * Save the user's consent.
     */
    public function ajax_save_consent()
    {
        try
        {
            $consent = $this->input->post('consent');

            $this->load->model('consents_model');

            $consent['ip'] = $this->input->ip_address();

            $consent['id'] = $this->consents_model->add($consent);

            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode([
                    'success' => TRUE,
                    'id' => $consent['id']
                ]));
        }
        catch (Exception $exc)
        {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode([
                    'exceptions' => [exceptionToJavaScript($exc)]
                ]));
        }
    }
}
