
@extends('layout')

@section('title')
TwitchClips -- Favorite Streamer Moments
@endsection

@section('content')

<div class="container-fluid">
	<div class="row">

	<div class="col-lg-3" style="background-color: #9068be; padding-bottom: 49.5%;"></div>
	<div class="col-lg-6" style="background-color: #e1e8f0; padding-bottom: 35%;">
	<h1 class="text-center">Twitch Clips</h1>


	<button class="btn">
     <img src="/images/button3.png" width="200" />
</button>

	<button id="thing">test</button>
	<button id="pause">pause</button>
	<p>teststststs</p>
	asdas
	asdas
	das
	das


	</div>

	<div class="col-lg-3" style="background-color: #9068be; padding-bottom: 49.5%;"></div>

</div>

</div>

@endsection

@section('scripts')

<link rel="stylesheet" type="text/css" href=/css/style.css>

<script>
	


	var thing = [
		'test.mp3',
		'test2.mp3',
		'test3.mp3'
	];

	$('#thing').on('click', function() {
		// console.log(thing[Math.floor(Math.random()*thing.length)]);
		$('#thing').prop('disabled', true);
		var clip = thing[Math.floor(Math.random()*thing.length)];
		console.log(clip);
		var snd = new Audio('/audio/'+clip);
		snd.addEventListener('ended', function() {
   			console.log('donm');
   			$('#thing').prop('disabled', false);
		});
		snd.play();
		// snd.play();
		// $('#thing').prop('disabled', false);

		// var audio = document.createElement('audio');
		// audio.src = '/audio/'+clip;
		// audio.play();
		// $('#thing').prop('disabled', false);
		// snd.currentTime = 0;
	$('#pause').on('click', function() {
		console.log('idkid');
		if(snd.paused) {
			snd.play();
		} else {
			snd.pause();
		}
		// snd.pause();
	});
	});




</script>


@endsection
