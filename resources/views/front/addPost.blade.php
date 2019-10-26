@extends('front.layouts.master')


@section('content')

<div class="container text-right">

	 <div class="col-lg-10">
	 	<h3>إضافة إعلان جديد</h3>
	 	<hr>
	 </div>


	 <form action="{{ url('addPost') }}" method="POST" enctype="multipart/form-data">
	 	{{ csrf_field() }}
		<div class="form-group">   
		   <label>عنوان الإعلان</label>
		   <input class="form-control" type="text" name="title">
		</div>

		<div class="form-group">   
		   <label>تفاصيل الإعلان</label>
		   <input class="form-control" type="text" name="text">
		</div>

		<div class="form-group">   
		   <label>السعر</label>
		   <input class="form-control" type="number" name="price">
		</div>

		<div class="form-group">   
		   <label>القسم</label>
		   <select class="form-control" name="category_id">
				@foreach($categories as $category)
					<option value="{{ $category->id }}">{{ $category->name }}</option>
				@endforeach
		   </select>
		</div>

		<div class="form-group">   
		   <label>البلد</label>
		   <select class="form-control" name="country_id">		   	
				@foreach($countries as $country)
					<option value="{{ $country->id }}">{{ $country->name }}</option>
				@endforeach
		   </select>
		</div>

		<div class="form-group">			
			<label>الصور</label>
			<input class="form-control" type="file" name="images[]" multiple>
		</div>

		<input type="submit" class="btn btn-primary" value="حفظ">



	 </form>

</div>


@endsection

