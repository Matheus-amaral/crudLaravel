@extends('layouts.master')

@section('content')
<form method="POST" action="/products/update/{{$product['id']}}" enctype="multipart/form-data">
	{!! csrf_field() !!}
	<p>
		<input type="submit" class="btn btn-primary" role="button" value="Save Product">
		<a class="btn btn-danger" href="/products" role="button">Cancel</a>
		<a class="btn btn-primary" href="/products/preview/{{$product['id']}}" role="button">Preview</a>
	</p>
	<div class="row">
		<div class="col-md-6">
			<p><input type="text" class="form-control" name="name" value="{{$product['name']}}" placeholder="Product Name" aria-describedby="sizing-addon1" required></p>

			<p><textarea class="form-control" name="description"  rows="9" placeholder="Description" required>{{$product['description']}}
			</textarea></p>

			<p><input type="text" class="form-control" name="price" value="{{$product['price']}}" id="price" placeholder="Price" aria-describedby="sizing-addon1" required></p>
		</div>
		<div class="col-md-6">
			<div class="form-group" id="imagePreview">
				<img id="output" class="img-responsive" src="{{ URL::asset('img/'.($product['image'] ? $product['id'].'/'.$product['image'] : 'img.png')) }}" />
	        </div>
			<p><input type="file" class="form-control"  name="image" placeholder="Product Name" accept="image/*" onchange="loadFile(event)" {{(!$product['image']) ? 'required' : ''}}></p>

			<p>
				<select type="text" class="form-control" name="category" aria-describedby="sizing-addon1" required="required">
					<option value="">Category</option>
					@foreach($categories as $category)
						<option value="{{$category['id']}}">{{$category['name']}}</option>
					@endforeach
				</select>
			</p>
		</div>
	</div>
</form>

<script type="text/javascript">
	var loadFile = function(event) {
	    var reader = new FileReader();
	    reader.onload = function(){
	      var output = document.getElementById('output');
	      output.src = reader.result;
	    };
	    reader.readAsDataURL(event.target.files[0]);
	};
</script>
@endsection