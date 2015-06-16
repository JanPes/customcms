<form action="controllers/addPageSubmit.php" method="post">
	<fieldset>
		<label for="title">Add Title</label>
		<input name="title" type="text" id="title" maxlength="50"/>
		<label for="heading">Add Heading</label>
		<input name="heading" type="text" id="heading" maxlength="50"/>
		<label for="content">Add content</label>
		<textarea name="content" id="content"></textarea>
		<label for="image">Add Image</label>
		<input type="text" id="image" name="image"/>
		 <label for="module">Add Module</label>
			<?php include 'controllers/moduleSelector.php'; ?>
		<input type="submit" value="Add Page" />
	</fieldset>
</form>