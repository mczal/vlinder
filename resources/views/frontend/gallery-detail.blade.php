@extends('layouts.vlinder')

@section('id-view','gallery')
@section('title','our gallery')
@section('content')
	<div class="real-content ">
		<div class="row">
			<div class="tag col-xs-2 col-xs-offset-1 col-sm-3">
				<div class="tag-our">OUR</div>
				<div class="tag-label">gallery</div>
			</div>
			<div class="content col-xs-8 col-xs-offset-1 col-sm-5">
				<div style="margin-bottom:20px;"><span>{{$gallery->name}}</span></div>
				@if(count($gallery->images) > 0)
				<!-- here -->
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="width:500px;height:400px;">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						{{--*/ $i = 0 /*--}}
						@foreach($gallery->images as $image)
							@if($i <= 0)
								<li data-target="#carousel-example-generic" data-slide-to="{{ $i++ }}" class="active"></li>
							@else
								<li data-target="#carousel-example-generic" data-slide-to="{{ $i++ }}"></li>
							@endif
						@endforeach
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" style="width:500px;height:400px;">
						{{--*/ $i = 1 /*--}}
						@foreach($gallery->images as $image)
							@if($i <= 1)
								<div class="item active">
							@else
								<div class="item">
							@endif
							<img src="{{$image->file}}" style="width:500px;height:400px;" alt="..."/>
							<div class="carousel-caption">
									<h3>Edit Image #{{$i++}}</h3>
							</div>
							</div>
						@endforeach
					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div> <!-- Carousel -->
			</div>
			<!-- endhere -->
			@endif
				<!--INI DISINI GAMBAR CAROUSEL DSJ... PLIS HELP-->
			</div>
		</div>

	</div>
@endsection
