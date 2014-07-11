<h2>Viewing <span class='muted'>#<?php echo $blog->id; ?></span></h2>

<p>
	<strong>Post date:</strong>
	<?php echo $blog->post_date; ?></p>
<p>
	<strong>Title:</strong>
	<?php echo $blog->title; ?></p>
<p>
	<strong>Content:</strong>
	<?php echo $blog->content; ?></p>

<?php echo Html::anchor('blog/edit/'.$blog->id, 'Edit'); ?> |
<?php echo Html::anchor('blog', 'Back'); ?>