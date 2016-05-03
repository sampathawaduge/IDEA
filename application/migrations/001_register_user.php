<?php
/**
 * Created by PhpStorm.
 * User: AppleFactory
 * Date: 4/2/2016 AD
 * Time: 7:29 AM
 */

class Migration_register_user extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
              'name'=>array(
                  'type'=>'VARCHAR',
                  'constraint' => '255'
              ),
                'email'=>array(
                    'type'=>'VARCHAR',
                    'constraint' => '255'
                    ),
                'password'=>array(
                    'type'=>'VARCHAR',
                    'constraint' => '255'
                ),
                'category'=>array(
                    'type'=>'VARCHAR',
                    'constraint' => '255'
                ),
                'occupation'=>array(
                    'type'=>'VARCHAR',
                    'constraint' => '255'
                ),
                'telephone'=>array(
                    'type'=>'VARCHAR',
                    'constraint' => '255'
                ),




          )

        );

        $this->dbforge->add_key('email',TRUE);
        $this->dbforge->create_table('table_users');
//        $this->db->query("
//        CREATE TRIGGER `mem` AFTER INSERT ON `table_users`
//        FOR EACH ROW
//        BEGIN
//        INSERT INTO table_mem_details (id) values (new.name);
//        END");
    }
    public function down()
    {
        $this->dbforge->drop_table('table_users');
    }


}