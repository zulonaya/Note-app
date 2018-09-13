@extends('todo.layouts')

@section('content')

@include('todo.pinned')
<div class="notes">
<div class="justify-content-center text-center title-section"><h6>Others</h6></div>
<div class="col-12 col-cards col-card note-container">
	<div class="row row-cards">
		<?php $i = 0; ?>
			@foreach($tasks as $task)
				<div class="col-12 col-md-3 col-card">
						<div class="col-card-content">
							<div class="card  card-styling">
								<div class="card-body">
									<h5 class="card-title">{{ $task->title }}</h5>
									<p class="card-text block-with-text">{{ $task->content }}</p>
									<p class="card-date">created at {{ $task->timestamp }}</p>
								</div>
							</div>
						</div>
				</div>
				
				
			@endforeach
	</div>
</div>
</div>
@endsection