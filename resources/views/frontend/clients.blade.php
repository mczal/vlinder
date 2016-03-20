@extends('layouts.vlinder')

@section('id-view','clients')

@section('content')
	<div class="real-content ">
		<div class="row">
			<div class="tag col-xs-2 col-xs-offset-1 col-sm-3">
				<div class="tag-our">OUR</div>
				<div class="tag-label">clients</div>
			</div>
			<div class="content col-xs-8 col-sm-6 col-sm-offset-1">
				<div id="clients-tag">
					Our experience has made us a
					trusted partner for our valued clients:
				</div>
				<ul style="list-style:none;">
					<li id="client-left" ng-repeat="client in myClients">
						<!-- data here -->
					</li>
					<li>and many more</li>
				</ul>
			</div>
		</div>

	</div>
@endsection
