<?php 

$action=$_POST['action'];
switch($action)
{
	case 'create' : create();
	break;
	case 'delete' : del();
	break;
	case 'view'	  : view();
	break;
	default : def();
	break;

}
function create()
{
	echo "create fn called";
}	
function del()
{
	echo "del called";
}
function view()
{
	echo "view called";
}
function def()
{
	echo "default called";
}