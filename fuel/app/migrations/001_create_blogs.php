<?php

namespace Fuel\Migrations;

class Create_blogs
{
	public function up()
	{
		\DBUtil::create_table('blogs', array(
            'id' => array('type' => 'integer primary key', 'autoincrement' => true),
			'post_date' => array('type' => 'text'),
			'title' => array('type' => 'text'),
			'content' => array('type' => 'text'),
			'created_at' => array('type' => 'integer', 'null' => true),
			'updated_at' => array('type' => 'integer', 'null' => true),

		));
	}

	public function down()
	{
		\DBUtil::drop_table('blogs');
	}
}