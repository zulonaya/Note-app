<div class="justify-content-center text-center title-section"><h6>Pinned Notes</h6></div>
<div class="card-pinned-carousel col-12 col-md-8 offset-md-2">
	<ul class="card-container">
		<?php $j = 0; $h =0 ?>

		@foreach($tasks as $task)
		<li id="card-pinned" class="card-pinned @if($j==1)class @elseif($j==2)active @elseif($j==3)next @else @endif " data-index="<?= $h++ ?>">
			<div class="col-card-content">
				<h5 class="card-title">Note <?= ++$j ?></h5>
				<p class="card-text block-with-text">{{ $task->content }}</p>
				<p class="card-date">created at 12 sept</p>
			</div>
		</li>
		@endforeach

	</ul>

<button class="previous-pinned" id="previous-pinned"><i class="fa fa-arrow-left"></i></button>
<button class="next-pinned" id="next-pinned"><i class="fa fa-arrow-right"></i></button>
</div>