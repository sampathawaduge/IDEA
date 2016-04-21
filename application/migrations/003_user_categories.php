<?php
/**
 * Created by PhpStorm.
 * User: AppleFactory
 * Date: 4/2/2016 AD
 * Time: 7:29 AM
 */

class Migration_user_categories extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'user_type'=>array(
                  'type'=>'VARCHAR',
                  'constraint' => '255'
              ),
              'user_category'=>array(
                  'type'=>'VARCHAR',
                  'constraint' => '255'
              ),
                
          )
        );
        $this->dbforge->add_key(array('user_type', 'user_category'));
        $this->dbforge->create_table('table_category');
    }
    public function down()
    {
        $this->dbforge->drop_table('table_category');
    }


}