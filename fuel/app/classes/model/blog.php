<?php
use Orm\Model;

class Model_Blog extends Model
{
	protected static $_properties = array(
		'id',
		'post_date',
		'title',
		'content',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('post_date', 'Post Date', 'required');
		$val->add_field('title', 'Title', 'required|max_length[512]');
		$val->add_field('content', 'Content', 'required|max_length[1024]');

		return $val;
	}

}
