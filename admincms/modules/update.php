<?php include 'controllers/connectMainSite.php'; ?>


<form action="controllers/updatePage.php" method="post">
	<fieldset>
		<label for="title">Edit Title</label>
		<input name="title" type="text" id="title" value="<?php echo $title_main ?>" maxlength="50"/>
		<label for="heading">Edit Heading</label>
		<input name="heading" type="text" id="heading" value="<?php echo $heading_main ?>" maxlength="50"/>
		<label for="content">Edit content</label>
		<textarea name="content" id="content"><?php echo $content_main ?></textarea>
		<label for="image">Edit Image</label>
		<input type="text" id="image" name="image" value="<?php echo $image_main ?>"/>
		 <label for="module">Edit Module</label>
			<?php include 'controllers/moduleSelector.php'; ?>
		<input type="hidden" name="id" value="<?php echo $page_no_main ?>" />
		<input type="submit" value="Save changes" />
	</fieldset>
</form>
<form action='controllers/deletePage.php' method="post">
	<fieldset>
		<input type="hidden" name="id" value="<?php echo $page_no_main ?>" />
		<input type="submit" value="Delete Page" />
	</fieldset>
</form>