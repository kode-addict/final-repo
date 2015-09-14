@extends('master')

@section('content')

<br>

<h2 class="ui header">{{ $candidate->name }}</h2>

<img src="https://storage.googleapis.com/staticassets/candidate-photos/Scan_B_20150831_165.jpg" class="ui bordered image candidateSmall">

<i class="thumbs outline up icon"></i>

<i class="thumbs outline down icon"></i>
<br>

<div class="ui divider"></div>

<ol>

@foreach($candidate->reviews as $reivew)

		<li>

			{{ $reivew->content }}
			<div class="">
				
				<i class="thumbs outline up icon"></i>

				<i class="thumbs outline down icon"></i>
			</div>
		</li>

		<br>

@endforeach()

</ol>


<div class="ui form">
  
  <div class="field">
    <label>Review</label>
    <textarea rows="2"></textarea>
  </div>

</div>

@stop