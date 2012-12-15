<?php

$themes = array();
if ($handle = opendir(DOC_ROOT.'/static/themes')) {
	while (false !== ($entry = readdir($handle))) {
		if ($entry != "." && $entry != ".." && is_file(DOC_ROOT."/static/themes/$entry/style.css")) {
			$themes[] = $entry;
		}
	}
	closedir($handle);
}

?>
<h1>Settings</h1>
<section id="settings">

	<div>
		<h3>Site Title</h3>
		<input id="title" type="text" value="<?php echo CI_TITLE ?>" />
	</div>

	<div>
		<h3>Theme</h3>
		<select id="theme">
		<?php
			foreach ($themes as $theme){
				echo "<option>$theme</option>";
			}
		?>
		</select>
	</div>

	<h3>Plugins</h3>

	<div>
		<h3>API Key</h3>
		<input id="apikey" type="text" value="<?php echo CI_APIKEY ?>" />
	</div>

	<h3>Watermark Image</h3>

	<h3>Hotlinking</h3>

	<h3>Upload Limits</h3>

	<h3>Bandwidth Caps</h3>

	<h3>RSS Feed</h3>

	<h3>Social Networking</h3>

</section>

<button id="btnSettingsSave">Save</button>