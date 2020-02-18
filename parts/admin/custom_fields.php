<?php
//select rooms for review
function departments_metabox_callback($post){
	$departments = get_posts(array(
		'post_type' => 'department',
		'numberposts' => -1,
		'orderby' => 'post_title',
		'order'       => 'ASC',
	));
	$departmentsIds = get_post_meta($post->ID, 'department_id', true);
	if(!is_array($departmentsIds)) $departmentsIds = array($departmentsIds);
	if ($departments) {
		foreach ($departments as $department) {
			if (in_array($department->ID, $departmentsIds)) {
				echo '<input type="checkbox" value="'.$department->ID.'" checked  name="departments[]"/>';
				echo '<span>'.$department->post_title.'</span>';
				echo '<br>';
			} else {
				echo '<input type="checkbox" value="'.$department->ID.'" name="departments[]"/>';
				echo '<span>'.$department->post_title.'</span>';
				echo '<br>';
			}
		}
	}
}

function init_departments_metabox() {
	add_meta_box(
		'department_list',
		'Отделы',
		'departments_metabox_callback',
		['staff'],
		'side',
		'high'
	);
}
add_action('add_meta_boxes', 'init_departments_metabox');

function departments_save($post_id){
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {return;}
	if (!current_user_can('edit_post', $post_id)) {return;}
	$departmentsIds = null;
	if(isset($_POST['departments'])){
		$departmentsIds = $_POST['departments'];
	}
	if($departmentsIds){
		update_post_meta($post_id, 'department_id', $departmentsIds);
	}
}
add_action('save_post', 'departments_save');
//end select departments for review
?>