@extends('layouts.vlinder')

@section('id-view','provisions')

@section('content')
	<div class="real-content ">
		<div class="row">
			<div class="tag col-xs-2 col-xs-offset-1 col-sm-3">
				<div class="tag-our">OUR</div>
				<div class="tag-label">provisions</div>
			</div>
			<div class="content col-xs-8 col-xs-offset-1 col-sm-5">
				<ul>
					<li ng-repeat="provision in myProvisions">
						{{provision.html}}
					</li>
				</ul>
			</div>
		</div>

	</div>
@endsection
