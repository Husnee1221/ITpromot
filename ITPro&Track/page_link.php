<?php
$page = null;
if(isset($_GET['page'])){
	$page = $_GET['page'];
}

switch ($page) {
	case 'all_member':
		include('admin/all_member.php');
		break;

	case 'accept_member':
		include('admin/accept_member.php');
		break;

	case 'edit_member':
		include('admin/edit_member.php');
		break;

	case 'manage_mark':
		include('admin/manage_mark.php');
		break;

	case 'edit_marktype':
		include('admin/edit_marktype.php');
		break;

	case 'view_result':
		include('admin/view_result.php');
		break;

	case 'project_group':
		include('admin/project_group.php');
		break;

	case 'choose_advisor':
		include('admin/choose_advisor.php');
		break;

	case 'create_projectschedule':
		include('admin/create_projectschedule.php');
		break;

	case 'create_presentschedule':
		include('admin/create_presentschedule.php');
		break;

	case 'value':
		# code...
		break;

	case 'advisor_request':
		include('advisor/advisor_request.php');
		break;

	case 'value':
		# code...
		break;

	case 'value':
		# code...
		break;

	case 'value':
		# code...
		break;

	case 'topic_request':
		include('student/topic_request.php');
		break;

	case 'my_group':
		include('student/my_group.php');
		break;

	case 'join_group':
		include('student/join_group.php');
		break;

		case 'presentation_request':
		include('student/presentation_request.php');
		break;

	case 'history':
		include('student/history.php');
		break;

	case 'request_advisor':
		include('student/request_advisor.php');
		break;

	case 'value':
		# code...
		break;

	case 'value':
		# code...
		break;

	case 'value':
		# code...
		break;


	default:
	//	include('abstract.php');
		break;
}

?>