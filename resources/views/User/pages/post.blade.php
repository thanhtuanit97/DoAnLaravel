@extends('user.layout.master')
@section('banner-route')
<div id="breadcrumb">
	<div class="container">
		<ul class="breadcrumb">
			<li><a href="{{route('trang-chu')}}">Home</a></li>
			<li><a href="{{route('news')}}">Post</a></li>
		</ul>
	</div>
</div>

@endsection

@section('mcontent')
<h3>Tất Cả Bài Viết</h3>
<ul class="list-links">
	@foreach($listPost as $lPost)
	<li><a href="{{route('news-post',$lPost->id)}}"><h5>{{$lPost->title}}</h5></a></li>
	@endforeach
</ul>	
{{$listPost->links()}}



@endsection