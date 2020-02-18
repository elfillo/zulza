<?php
/*
Template Name: Сотрудники
*/
?>
<?php
$staff = get_posts(
	[
		'post_type' => 'staff',
		'numberposts' => -1,
	]
);
$departments = get_posts(array(
	'post_type' => 'department',
	'numberposts' => -1,
	'orderby' => 'post_title',
	'order'       => 'ASC',
));

$list = [];

foreach ($departments as $department){
	foreach ($staff as $st){
		$department_id = get_post_meta($st->ID, 'department_id', true);
		if(in_array($department->ID, $department_id) ){
			$list[$department->post_title][] =  $st;
		}
	}
}

unset($department, $staff);
?>
<?php get_header()?>
<div class="container container--side-bar">
	<?php require 'parts/views/side-bar.php'?>
	<div class="content">
		<h1><?php echo $post->post_title?></h1>
		<section class="staff-page departments">
			<?php foreach ($list as $title => $department):?>
				<div class="department">
					<div class="title"><?php echo $title?> <div class="circle"><svg class="arrow" viewBox="0 0 492 492"><use xlink:href="#icon--arrow"></use></svg></div></div>
						<div class="list">
							<?php foreach ($department as $staff):?>
								<div class="item">
									<div class="box box_img">
										<?php $ava = get_the_post_thumbnail_url($staff)?>
										<div class="avatar" style="background-image: url('<?php echo $ava?>')"></div>
									</div>
									<div class="box box_text">
										<div class="name"><?php echo $staff->post_title?></div>
										<div class="status"><?php the_field('staff_status', $staff->ID)?></div>
										<div class="title">Телефон:</div>
										<p>
											<a href="tel:<?php the_field('staff_phone_link', $staff->ID)?>"><?php the_field('staff_phone', $staff->ID)?></a>
										</p>

										<div class="title">E-mail:</div>
										<p>
											<a class="email" href="mail:<?php the_field('staff_email', $staff->ID)?>"><?php the_field('staff_email', $staff->ID)?></a>
										</p>
									</div>
								</div>
							<?php endforeach;?>
						</div>
				</div>
			<?php endforeach; unset($department, $title, $staff)?>
		</section>
	</div>
</div>
<?php get_footer()?>
