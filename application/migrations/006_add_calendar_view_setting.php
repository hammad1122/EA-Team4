<?php defined('BASEPATH') OR exit('No direct script access allowed');



class Migration_Add_calendar_view_setting extends CI_Migration {
    public function up()
    {
        if ( ! $this->db->field_exists('calendar_view', 'ea_user_settings'))
        {
            $fields = [
                'calendar_view' => [
                    'type' => 'VARCHAR',
                    'constraint' => '32',
                    'default' => 'default'
                ]
            ];

            $this->dbforge->add_column('ea_user_settings', $fields);

            $this->db->update('ea_user_settings', ['calendar_view' => 'default']);
        }
    }

    public function down()
    {
        if ($this->db->field_exists('calendar_view', 'ea_user_settings'))
        {
            $this->dbforge->drop_column('ea_user_settings', 'calendar_view_calendar');
        }
    }
}
