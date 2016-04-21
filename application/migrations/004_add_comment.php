<?php
/**
 * Created by PhpStorm.
 * User: AppleFactory
 * Date: 4/2/2016 AD
 * Time: 7:29 AM
 */

class Migration_add_comment extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
                'submission_id'=>array(
                    'type'=>'INT',
                    'constraint' => '255'
                ),
                'comment_date'=>array(
                    'type'=>'VARCHAR',
                    'constraint' => '255'
                ),
                'comment_time'=>array(
                    'type'=>'VARCHAR',
                    'constraint' => '255'
                ),
                'comment_id'=>array(
                    'type'=>'INT',
                    'auto_increment' => TRUE
                ),
                'comment_user'=>array(
                    'type'=>'VARCHAR',
                    'constraint' => '255'
                ),
                'comment'=>array(
                    'type'=>'VARCHAR',
                    'constraint' => '255'
                ),

            )
        );
        $this->dbforge->add_key('comment_id',TRUE);
        $this->dbforge->create_table('table_comment');
    }
    public function down()
    {
        $this->dbforge->drop_table('table_comment');
    }


}