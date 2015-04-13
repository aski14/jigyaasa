@extends('welcome')

@section('content')
	<?php $i=1; ?>
	@foreach($posts as $post)
		@if($i>4)
			<?php break; ?>
		@endif
		<section class="cd-fixed-background img-{{ $i }}" data-type="slider-item">
			<div class="cd-content">
				<h2>{{ $post->post_title }}</h2>
				<p>{!! $post->post_content !!}</p>
			</div>
		</section>
		<?php $i++; ?>
	@endforeach

<nav>
	<ul class="cd-vertical-nav">
		<li><a href="#0" class="cd-prev inactive">Next</a></li>
		<li><a href="#0" class="cd-next">Prev</a></li>
	</ul> <!-- cd-vertical-nav -->
</nav> 
@endsection
