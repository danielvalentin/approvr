@extends('app')

@section('content')

<!-- This is the top row that contains the new project / sorting view !-->
<div class="row">
	<div class="col-xs-12">
		<a href="#" class="btn btn__sort btn-sm btn-default pull-right"><span class="glyphicon glyphicon-th"></span></a>
		<a href="#" class="btn btn__sort btn-sm btn-default pull-right"><span class="glyphicon glyphicon-th-list"></span></a>
	</div>

</div>

<!-- This is the second row that contains the current projects in only grid view for now !-->
<ul class="row">
	<li class="col-xs-12 col-sm-6 col-md-4">
		<article class="projectCard">
			<div class="projectCard__icon" style="background-image: url('http://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Ford_Motor_Company_Logo.svg/1280px-Ford_Motor_Company_Logo.svg.png'); background-size: cover;">

			</div>

			<div class="projectCard__header">
				<h4>Ford Motor</h4>
			</div>

			<div class="projectCard__footer">
				<ul class="module__meta">
					<li class="module__meta-item">
						<a href="#" title="Add new item for approval">
							<span class="glyphicon glyphicon-plus"></span>
						</a>
					</li>
					<li class="module__meta-item">
						<a href="#" title="View newest comments">
							<span class="glyphicon glyphicon-comment"></span>
						</a>
					</li>
					<li class="module__meta-item">
						<a href="#" title="Modify project settings">
							<span class="glyphicon glyphicon-cog"></span>
						</a>
					</li>
				</ul>
			</div>
		</article>
	</li>	

	<li class="col-xs-12 col-sm-6 col-md-4">
		<article class="projectCard">
			<div class="projectCard__icon" style="background-image: url('http://www.napleswebdesign.net/wp-content/uploads/2013/08/multi-color-logo-6.jpg'); background-size: cover;">
			</div>

			<div class="projectCard__header">
				<h4>MyPixel</h4>
			</div>
			
			<div class="projectCard__footer">
				<ul class="module__meta">
					<li class="module__meta-item">
						<a href="#" title="Add new item for approval">
							<span class="glyphicon glyphicon-plus"></span>
						</a>
					</li>
					<li class="module__meta-item">
						<a href="#" title="View newest comments">
							<span class="glyphicon glyphicon-comment"></span>
						</a>
					</li>
					<li class="module__meta-item">
						<a href="#" title="Modify project settings">
							<span class="glyphicon glyphicon-cog"></span>
						</a>
					</li>
				</ul>
			</div>
		</article>
	</li>	

	<li class="col-xs-12  col-sm-6 col-md-4">
		<article class="projectCard">
			<header class="projectCard__icon" style="background-image: url('http://logofaves.com/wp-content/uploads/2011/04/ora_m.jpg'); background-size: cover;">
			</header>
			
			<div class="projectCard__header">
				<h4>Orange</h4>
			</div>

			<div class="projectCard__footer">
				<ul class="module__meta">
					<li class="module__meta-item">
						<a href="#" title="Add new item for approval">
							<span class="glyphicon glyphicon-plus"></span>
						</a>
					</li>
					<li class="module__meta-item">
						<a href="#" title="View newest comments">
							<span class="glyphicon glyphicon-comment"></span>
						</a>
					</li>
					<li class="module__meta-item">
						<a href="#" title="Modify project settings">
							<span class="glyphicon glyphicon-cog"></span>
						</a>
					</li>
				</ul>
			</div>
		</article>
	</li>	


	<li class="col-xs-12 col-sm-6 col-md-4">
		<article class="projectCard">
			<header class="projectCard__icon" style="background-image: url('http://janrain.com/wp-content/uploads/2013/12/gr-Samsung_Logo.png'); background-size: cover;">
			</header>

			<div class="projectCard__header">
				<h4>Samsung</h4>
			</div>

			<div class="projectCard__footer">
				<ul class="module__meta">
					<li class="module__meta-item">
						<a href="#" title="Add new item for approval">
							<span class="glyphicon glyphicon-plus"></span>
						</a>
					</li>
					<li class="module__meta-item">
						<a href="#" title="View newest comments">
							<span class="glyphicon glyphicon-comment"></span>
						</a>
					</li>
					<li class="module__meta-item">
						<a href="#" title="Modify project settings">
							<span class="glyphicon glyphicon-cog"></span>
						</a>
					</li>
				</ul>
			</div>
		</article>
	</li>

	<li class="col-xs-12 col-sm-6 col-md-4">
		<article class="projectCard">
			<header class="projectCard__icon" style="background-image: url('http://blog.collegegreenlight.com/blog/wp-content/uploads/2013/02/Aguila-Huge-Logo.jpeg'); background-size: cover;">
			</header>

			<div class="projectCard__header">
				<h4>Youth Leadership Institute</h4>
			</div>

			<div class="projectCard__footer">
				<ul class="module__meta">
					<li class="module__meta-item">
						<a href="#" title="Add new item for approval">
							<span class="glyphicon glyphicon-plus"></span>
						</a>
					</li>
					<li class="module__meta-item">
						<a href="#" title="View newest comments">
							<span class="glyphicon glyphicon-comment"></span>
						</a>
					</li>
					<li class="module__meta-item">
						<a href="#" title="Modify project settings">
							<span class="glyphicon glyphicon-cog"></span>
						</a>
					</li>
				</ul>
			</div>
		</article>
	</li>
	
		<li class="col-xs-12 col-sm-6 col-md-4">
		<article class="projectCard">
			<div class="projectCard__icon" style="background-image: url('http://www.napleswebdesign.net/wp-content/uploads/2013/08/multi-color-logo-6.jpg'); background-size: cover;">
			</div>

			<div class="projectCard__header">
				<h4>MyPixel</h4>
			</div>
			
			<div class="projectCard__footer">
				<ul class="module__meta">
					<li class="module__meta-item">
						<a href="#" title="Add new item for approval">
							<span class="glyphicon glyphicon-plus"></span>
						</a>
					</li>
					<li class="module__meta-item">
						<a href="#" title="View newest comments">
							<span class="glyphicon glyphicon-comment"></span>
						</a>
					</li>
					<li class="module__meta-item">
						<a href="#" title="Modify project settings">
							<span class="glyphicon glyphicon-cog"></span>
						</a>
					</li>
				</ul>
			</div>
		</article>
	</li>	

	<li class="col-xs-12  col-sm-6 col-md-4">
		<article class="projectCard">
			<header class="projectCard__icon" style="background-image: url('http://logofaves.com/wp-content/uploads/2011/04/ora_m.jpg'); background-size: cover;">
			</header>
			
			<div class="projectCard__header">
				<h4>Orange</h4>
			</div>

			<div class="projectCard__footer">
				<ul class="module__meta">
					<li class="module__meta-item">
						<a href="#" title="Add new item for approval">
							<span class="glyphicon glyphicon-plus"></span>
						</a>
					</li>
					<li class="module__meta-item">
						<a href="#" title="View newest comments">
							<span class="glyphicon glyphicon-comment"></span>
						</a>
					</li>
					<li class="module__meta-item">
						<a href="#" title="Modify project settings">
							<span class="glyphicon glyphicon-cog"></span>
						</a>
					</li>
				</ul>
			</div>
		</article>
	</li>	

	<li class="col-xs-12 col-sm-6 col-md-4">
		<article class="projectCard">
			<header class="projectCard__icon" style="background-image: url('http://golftourney.com/wp-content/uploads/2014/06/plus-512.gif'); background-size: cover;">
			</header>

			<div class="projectCard__footer">
				<ul class="module__meta">
					<li class="module__meta-full">
						<a href="#" title="Add new item for approval">
							Add new project
						</a>
					</li>
				</ul>
			</div>
		</article>
	</li>

</ul>
@endsection