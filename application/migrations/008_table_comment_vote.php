<?php
/**
 * Created by PhpStorm.
 * User: AppleFactory
 * Date: 4/2/2016 AD
 * Time: 7:29 AM
 */

class Migration_table_comment_vote extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
                'vote_id'=>array(
                    'type'=>'INT',
                    'constraint' => '50'
                ),
                'sub_id'=>array(
                    'type'=>'INT',
                    'constraint' => '50'
                ),
                'comment_id'=>array(
                    'type'=>'INT',
                    'constraint' => '55'
                ),
                'vote_status'=>array(
                    'type'=>'INT',
                    'constraint' => '50'
                ),
                'users'=>array(
                    'type'=>'VARCHAR',
                    'constraint' => '255'
                )

            )
        );
        $this->dbforge->add_key('vote_id',TRUE);
        $this->dbforge->create_table('table_comment_vote');
    }
    public function down()
    {
        $this->dbforge->drop_table('table_comment_vote');
    }


}