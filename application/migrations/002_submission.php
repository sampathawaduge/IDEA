<?php
/**
 * Created by PhpStorm.
 * User: AppleFactory
 * Date: 4/2/2016 AD
 * Time: 7:29 AM
 */

class Migration_submission extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'submission_id'=>array(
                  'type'=>'INT',
                  'auto_increment' => TRUE
              ),
              'submission_date'=>array(
                  'type'=>'VARCHAR',
                  'constraint' => '255'
              ),
                'submission_time'=>array(
                    'type'=>'VARCHAR',
                    'constraint' => '255'
                    ),
                'submission_user'=>array(
                    'type'=>'VARCHAR',
                    'constraint' => '255'
                ),
                'description'=>array(
                    'type'=>'VARCHAR',
                    'constraint' => '255'
                ),
                'user_category'=>array(
                    'type'=>'VARCHAR',
                    'constraint' => '255'
                ),
                'submission'=>array(
                  'type'=>'VARCHAR',
                  'constraint' => '255',
                  'default'=>NULL
              ),
          )
        );
        $this->dbforge->add_key('submission_id',TRUE);
        $this->dbforge->create_table('table_submission');
    }
    public function down()
    {
        $this->dbforge->drop_table('table_submission');
    }


}