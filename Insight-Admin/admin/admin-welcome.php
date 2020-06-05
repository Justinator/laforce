<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
// display the plugin settings page
function display_welcome_page() {
	// check if user is allowed access
	if ( ! current_user_can( 'manage_options' ) ) return;
	?>
	<div id="welcome" class="wrap">
		<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
		<h2>Working in Your WordPress Dashboard</p>
		<h3>Dashboard</h3>
		<p>
			See some basic stats, recent activity and more.
		</p>
		<h3>Media</h3>
		<p>
			Your media folder is where you will find all the images that are used on your website.
		</p>
		<h3>Posts</h3>
		<p>
			If you have a blog here is where your blog posts can be found and new posts can be created.
		</p>
		<h3>Pages</h3>
		<p>
			Contains all the pages for your website.
		</p>
		<h3>Forms</h3>
		<p>
			Here is where you will find your contact forms and settings. Here you manage form entries, review conversions, and alter forms and settings.
		</p>
		<h3>Portfolio</h3>
		<p>
			This is where you will add new featured projects or manage existing projects.
		</p>
		<h3>Appearance</h3>
		<p>
			Where you will find options to edit/customize the appearance and display of your website. The only options you will need here are Customize and Menus.
		</p>
		<h3>Plugins</h3>
		<p>
			This is where any add-on plugins are listed and managed. Do not make any changes here or add any new plugins. Plugins should be thoroughly tested and
			reviewed before adding to any website. Use caution here if you are going to try adding against our recommendation. You could break your website by adding
		  bad plugins.
		</p>
		<h3>Users</h3>
		<p>
			To add new blog authors or add any users for other reasons. Manage your sites users here. Note, each user you add makes your site more and more vulnerable to
			hacks and brute force attack attempts. Only add users when absolutely necessary and make sure to use <a href="https://www.random.org/passwords/?num=1&len=24&format=html&rnd=new" target="_blank">strong passwords</a>.
		 	By default WordPress recommends strong passwords when setting up a new user. Use these recommendations and use a password manager for easier management.
		</p>
		<p>
			For additional information reference your <a href="https://docs.google.com/document/d/1lMl44jOAWcE82WVzX7_-36Ix8N4_yjDxPEUvH5zoKsQ/edit?usp=sharing" target="_blank">website training document</a>.
		</p>
	</div>
	<?php
}
