<?php get_header(); ?>
<div class="bg-light">
	<?php echo do_shortcode('[wonderplugin_slider id=1]'); ?>
</div>

<div class="container">
	<h4>
		<div class="text-600">Selected</div>
		By Editor
	</h4>
	<div class="devider"></div>
	<div class="row">
		<?php
		$query = new WP_Query('cat=4&posts_per_page=4&order=desc');
		if ($query->have_posts()) {
			while ($query->have_posts()) :
				$query->the_post();
				get_template_part('content');
			endwhile;
		} else {
			echo 'Not Have Posts!';
		}
		?>
	</div>

	<h4>
		<div class="text-600">Recent</div>
		News
	</h4>
	<div class="devider"></div>
	<div class="row">
		<?php
		$recent_news = new WP_Query('cat=2&posts_per_page=4&order=desc');
		if ($recent_news->have_posts()) {
			while ($recent_news->have_posts()) :
				$recent_news->the_post();
				get_template_part('content');
			endwhile;
		} else {
			echo 'Not Have Posts!';
		}
		?>
	</div>

	<h4>
		<div class="text-600">Covid-19</div>
		Events
	</h4>
	<div class="devider"></div>
	<div class="row">
		<?php
		$recent_event = new WP_Query('cat=3&posts_per_page=4&order=desc');
		if ($recent_event->have_posts()) {
			while ($recent_event->have_posts()) :
				$recent_event->the_post();
				get_template_part('content');
			endwhile;
		} else {
			echo 'Not Have Posts!';
		}
		?>
	</div>

	<h4>
		<div class="text-600">All</div>
		Items
	</h4>
	<div class="devider"></div>
	<div class="content">
		<?php
		if (have_posts()) {
			while (have_posts()) {
				the_post();
				get_template_part('content');
			}
			?>
			<div class="text-center">
				<?php echo the_posts_pagination(); ?>
			</div>

		<?php
		} else {
			echo 'Not Have Posts!';
		}
		?>
	</div>
</div>

<?php get_footer(); ?>