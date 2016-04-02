<?php
/**
 * Created by PhpStorm.
 * User: AppleFactory
 * Date: 4/2/2016 AD
 * Time: 7:29 AM
 */

class Migration_create_blog extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
              'id'=>array(
                  'type'=>'INT',
                  'unsigned'=>TRUE,
                  'auto_increment'=>TRUE
              ),
                'Tile'=>array(
                    'type'=>'varchar',
                    'constraint'=>250
                    ),
                'text'=>array(
                    'type'=>'TEXT'
                ),
                'pubdate'=>array(
                    'type'=>'DATETIME'
                ),
          )
        );
        $this->dbforge->add_key('id',TRUE);
        $this->dbforge->create_table('blog');
    }
    public function down()
    {
        $this->dbforge->drop_table('blog');
    }


}