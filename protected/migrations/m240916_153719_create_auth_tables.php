<?php

class m240916_153719_create_auth_tables extends CDbMigration
{
	public function up()
    {
        // Tabel AuthItem
        $this->createTable('AuthItem', array(
            'name' => 'varchar(64) NOT NULL',
            'type' => 'integer NOT NULL',
            'description' => 'text',
            'bizrule' => 'text',
            'data' => 'text',
            'PRIMARY KEY (`name`)',
        ), 'ENGINE=InnoDB');

        // Tabel AuthItemChild
        $this->createTable('AuthItemChild', array(
            'parent' => 'varchar(64) NOT NULL',
            'child' => 'varchar(64) NOT NULL',
            'PRIMARY KEY (`parent`, `child`)',
        ), 'ENGINE=InnoDB');

        // Foreign key untuk AuthItemChild
        $this->addForeignKey('fk_auth_item_child_parent', 'AuthItemChild', 'parent', 'AuthItem', 'name', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_auth_item_child_child', 'AuthItemChild', 'child', 'AuthItem', 'name', 'CASCADE', 'CASCADE');

        // Tabel AuthAssignment
        $this->createTable('AuthAssignment', array(
            'itemname' => 'varchar(64) NOT NULL',
            'userid' => 'varchar(64) NOT NULL',
            'bizrule' => 'text',
            'data' => 'text',
            'PRIMARY KEY (`itemname`, `userid`)',
        ), 'ENGINE=InnoDB');

        // Foreign key untuk AuthAssignment
        $this->addForeignKey('fk_auth_assignment_itemname', 'AuthAssignment', 'itemname', 'AuthItem', 'name', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        // Drop tabel dan foreign keys
        $this->dropForeignKey('fk_auth_assignment_itemname', 'AuthAssignment');
        $this->dropTable('AuthAssignment');

        $this->dropForeignKey('fk_auth_item_child_parent', 'AuthItemChild');
        $this->dropForeignKey('fk_auth_item_child_child', 'AuthItemChild');
        $this->dropTable('AuthItemChild');

        $this->dropTable('AuthItem');
    }
}