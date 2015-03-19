@extends('app')

@section('content')
	<h2>Projects/index</h2>
<?php
	$projects = Auth::user()->projects();
	if((bool)$projects->count())
	{
		echo '<ul>';
		foreach($projects->get() as $project)
		{
			echo '<li>';
			echo $project->link();
			echo '</li>';
		}
		echo '</ul>';
	}
	else
	{
		echo '<em>None yet..!';
	}
?>
@endsection
