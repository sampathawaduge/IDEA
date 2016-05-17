<?php
/**
 * Created by PhpStorm.
 * User: AppleFactory
 * Date: 4/2/2016 AD
 * Time: 7:29 AM
 */

class Migration_message_test extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
                'id'=>array(
                    'type'=>'INT',
                    'constraint' => '50'
                ),
                'notification'=>array(
                    'type'=>'VARCHAR',
                    'constraint' => '255'
                ),
                'status'=>array(
                    'type'=>'VARCHAR',
                    'constraint' => '55'
                ),
                'user'=>array(
                    'type'=>'VARCHAR',
                    'constraint' => '255'
                ),
                'submissionid'=>array(
                    'type'=>'INT',
                    'constraint' => '255'
                )

            )
        );
        $this->dbforge->add_key('id',TRUE);
        $this->dbforge->create_table('table_messagetest');
    }
    public function down()
    {
        $this->dbforge->drop_table('table_messagetest');
    }


}