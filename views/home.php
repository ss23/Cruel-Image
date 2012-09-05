<?php

$template->set('title', CI_TITLE);
//$template->add('rss', array('path' => '/sup/rss/blog.rss', 'title' => 'Blog Posts'));
$template->place('header');
?>

	<div id="imagescroller">
		<div id="imageprogressbar"></div>
		<ul></ul>
		<div id="scrollercaption">Click or Drag Images Here</div>
	</div>

	<div id="uploadbuttons">
		<button id="btnAdd">+ Add Image</button>
		<button id="btnClear">Clear</button>
		<button id="btnUpload">Upload</button>
	</div>

	<form id="uploadform" action="<?php echo URL_ROOT ?>upload" method="POST" enctype="multipart/form-data">
<!--		<label for="title">Title</label>-->
<!--		<input id="title" type="text" name="title" placeholder="Optional" />-->

		<input type="hidden" id="token" value="<?php echo fRequest::generateCSRFToken() ?>" />
		<input id="files" type="file" name="files[]" multiple accept="image/*" />
	</form>

	<div id="results"></div>

	<div class="cropdialog">
		<div class="cropimage"></div>
		<canvas class="cropthumb" width="150" height="150"></canvas>
		<div>
			<select>
				<option value="">None</option>
				<option value="1">1:1</option>
				<option value="2">2:1</option>
				<option value="1.33">4:3</option>
			</select>
		</div>
	</div>

	<div id="optiondialog">
		<button id="btnCrop">Crop</button>
		<button id="btnDelete">Delete</button>
	</div>

<?php
$template->place('footer');
