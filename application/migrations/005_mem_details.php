<?php
/**
 * Created by PhpStorm.
 * User: AppleFactory
 * Date: 4/2/2016 AD
 * Time: 7:29 AM
 */

class Migration_mem_details extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
                'id'=>array(
                    'type'=>'VARCHAR',
                    'constraint' => '255'
                ),
                'mem_type'=>array(
                    'type'=>'VARCHAR',
                    'constraint' => '255'
                )

            )
        );
        $this->dbforge->add_key('id',TRUE);
        $this->dbforge->create_table('table_mem_details');
    }
    public function down()
    {
        $this->dbforge->drop_table('table_mem_details');
    }


}