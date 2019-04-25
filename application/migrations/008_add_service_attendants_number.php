<?php defined('BASEPATH') OR exit('No direct script access allowed');



class Migration_Add_service_attendants_number extends CI_Migration {
    public function up()
    {
        if ( ! $this->db->field_exists('attendants_number', 'ea_services'))
        {
            $fields = [
                'attendants_number' => [
                    'type' => 'INT',
                    'constraint' => '11',
                    'default' => '1',
                    'after' => 'availabilities_type'
                ]
            ];

            $this->dbforge->add_column('ea_services', $fields);

            $this->db->update('ea_services', ['attendants_number' => '1']);
        }
    }

    public function down()
    {
        if ($this->db->field_exists('attendants_number', 'ea_services'))
        {
            $this->dbforge->drop_column('ea_services', 'attendants_number');
        }
    }
}
