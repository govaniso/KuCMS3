<?php

class TablesController extends DbadminController 
{
	public function before_filter()
	{
		$this->model = empty( $_SESSION['model'] ) ? 'users' : $_SESSION['model'];
		View::template( 'shell' );
	}
	
	public function change( $table )
	{
		$_SESSION['model'] = $table;
		_::go( 'admin/tables' );
	}
}
