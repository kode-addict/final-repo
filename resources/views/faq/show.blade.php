@extends('master')

@section('content')
<div class="ui main text container">
	<section class="ui text container push-down">
		  <div class="ui segments">
		    <div class="ui segment">
		    	<h3>
			    	<i class="remove bookmark icon gray-color"></i>
			    	{!! $faq->data->question !!}
		    	</h3>
		    </div>
		    <div class="ui segment">
		    	<p>{!! str_limit($faq->data->answer, 300, '...') !!}</p>

				<div class="ui grid">
					<div class="left aligned wide column">
					    <div class="gray-color">
					      <span>
					        <i class="like icon"></i> 100 Like
					      </span>
					      <span>
					        <i class="star icon"></i> 50 Favorite
					      </span>
					       <span>
					        <i class="share icon"></i> 30 Share
					      </span>
					    </div>
					</div>

					<!-- <div class="right aligned two wide column">
						<div class="ui right dropdown item">
							<span class="gray-color">
							    <i class="ellipsis horizontal icon"></i>
							</span>
						    <div class="menu">
						      <div class="item">Applications</div>
						      <div class="item">International Students</div>
						      <div class="item">Scholarships</div>
						    </div>
					  	</div>
					</div> -->

				</div>
		    </div>
		  </div>
	</section>
</div>
@endsection