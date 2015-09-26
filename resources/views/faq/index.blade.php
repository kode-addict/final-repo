@extends('master')

@section('content')

<div class="ui text container">

	<section class="ui form container push-down">
		<div class="field">
          {!! Form::open(['route' => 'faq.index', 'method' => 'GET']) !!}
	          <div class="ui huge input">
	            	{!! Form::text('keyword', null, ['placeholder' => 'Search FAQ']) !!}
	          </div>
          {!! Form::close() !!}
        </div>
	</section>
	
	@if($data->data)
		@foreach($data->data as $faq)
			<section class="ui text container push-down">
				  <div class="ui segments">
				    <div class="ui segment">
				    	<a href="{!! route('faq.show', $faq->id) !!}">
					    	<h3>
						    	<i class="remove bookmark icon gray-color"></i>
						    	{!! $faq->question !!}
					    	</h3>
				    	</a>
				    </div>
				    <div class="ui segment">
				    	<p>{!! str_limit($faq->answer, 300, '...') !!}</p>

						<div class="ui grid">
<!-- 							<div class="left aligned wide column">
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
							</div> -->

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
		@endforeach

		<div class="ui pagination menu">
			@if(!empty($data->meta->pagination->links->previous))
				<a class="item" href="{{ url('faq/').$data->meta->pagination->links->previous }}">
					Previous
				</a>
			@else
				<a class="disabled item">
					Previous
				</a>
			@endif
			@if(!empty($data->meta->pagination->links->next))
				<a class="item" href="{{ url('faq/').$data->meta->pagination->links->next }}">
					Next
				</a>
			@else
				<a class="disabled item">
					Next
				</a>
			@endif
		</div>

	@else
		<div class="ui warning message">
	      <i class="close icon"></i>
	      	<strong>Sorry!</strong> your search didn't return anything.
	    </div>
	@endif

</div>

@endsection