<?php
/**
 * Created by PhpStorm.
 * User: AppleFactory
 * Date: 4/2/2016 AD
 * Time: 7:29 AM
 */

class Migration_reported_submissions extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
                'report_id'=>array(
                    'type'=>'INT',
                    'constraint' => '50'
                ),
                'submission_id'=>array(
                    'type'=>'INT',
                    'constraint' => '50'
                ),
                'reporter'=>array(
                    'type'=>'VARCHAR',
                    'constraint' => '255'
                )

            )
        );
        $this->dbforge->add_key('report_id',TRUE);
        $this->dbforge->create_table('table_reported_submissions');
    }
    public function down()
    {
        $this->dbforge->drop_table('table_reported_submissions');
    }


}