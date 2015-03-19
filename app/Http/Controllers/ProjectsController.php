<?php namespace App\Http\Controllers;

use App\Http\Models\Project;

class ProjectsController extends Controller {
	
	public function newProject()
	{
		if($_POST)
		{
			$input = \Input::only('name','description');
			$validator = \Validator::make($input, [
				'name' => 'required|max:255',
				'description' => 'max:3000',
			]);
			if($validator->passes())
			{
				$project = new Project();
				$project->user_id = \Auth::user()->id;
				$project->name = $input['name'];
				$project->description = $input['description'];
				$project->save();
			}
			else
			{
				$messages = $validator->messages();
				\Session::flash('errors', $messages);
				return redirect(\Site::route('projects.new'))->with('errors', $messages)->withInput();
			}
		}
		return view('projects.new');
	}
	
	public function single($id)
	{
		$project = Project::find($id);
		return view('projects.single', array(
			'project' => $project
		));
	}

	public function index()
	{
		return view('projects.index');
	}

}
