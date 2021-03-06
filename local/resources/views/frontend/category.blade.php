@extends('frontend/master')
@section('title','Danh mục')
@section('content')
<!-- Post -->
<h2>Danh mục</h2>
@foreach($listpost as $post)
<article class="post">
	<header>
		<div class="title">
			<h2><a href="#">{{$post->post_name}}</a></h2>
		</div>
		<div class="meta">
			<time class="published" datetime="11-01-2015">{{date('d-m-Y H:i',strtotime($post->post_created))}}</time>
			<span class="author"><span class="name">Vietpro</span><img src="images/logo.jpg" alt="" /></span>
		</div>
	</header>
	<a href="#" class="image featured"><img src="{{asset('public/upload/featured/'.$post->post_img)}}" alt="" /></a>
	<p>{{$post->post_sum}}</p>
	<footer>
		<ul class="actions">
			<li><a href="{{asset('post/'.$post->post_id.'/'.$post->post_slug.'.html')}}" class="button big">Đọc tiếp</a></li>
		</ul>
		<ul class="stats">
			<li><a href="#">{{$post->cat_name}}</a></li>
		</ul>
	</footer>
</article>
@endforeach
<!-- Pagination -->

<ul class="actions pagination">
	{{$listpost->links()}}
</ul>
@stop