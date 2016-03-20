@extends('layouts.vlinder')

@section('id-view','gallery')

@section('content')
	<div class="real-content ">
		<div class="row">
			<div class="tag col-xs-2 col-xs-offset-1 col-sm-3">
				<div class="tag-our">OUR</div>
				<div class="tag-label">gallery</div>
			</div>
			<div class="content col-xs-8 col-xs-offset-1 col-sm-5">
				<ul style="list-style:none;">
					<li ng-repeat="gallery in myGallery" style="padding-bottom:20px;">
						<a href="#/gallery-detail/{{gallery.code}}">{{gallery.html}}</a>
					</li>
				</ul>
			</div>
		</div>

	</div>
@endsection
