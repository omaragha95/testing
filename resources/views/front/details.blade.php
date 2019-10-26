@extends('front.layouts.master')

@section('content')
    
	
	<div class="container text-right" style="margin-bottom: 20px;">
		

		<h3 class="card-title">{{ $post->title }}</h3><hr>

		<div class="card-mt-4">
			<img src="{{ asset('storage/img/'.$post->images->first()['image']) }}" onerror="this.onerror=null;this.src='storage/img/default.jpg';" alt="image" class="card-img-top img-fluid">
			<div class="card-body">
				<h4>المعلومات الرئيسية</h4>
				<p class="card-text">اسم المعلن: {{ $post->user->name }}</p>
				<p class="card-text">البلد: {{ $post->country->name }}</p>
				<p class="card-text">السعر: {{ $post->price }}</p>
				<h4>وصف الإعلان</h4>
				<p class="card-text">{{ $post->text }}</p>
			</div>
		</div>







	</div>


@endsection