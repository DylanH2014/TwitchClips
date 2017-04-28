
@extends('layout')

@section('title')
TwitchClips -- Favorite Streamer Moments
@endsection

@section('content')

<style>
body {background-color: #9068be;}

</style>
<div class="container-fluid" style="padding-top: 20px;">
	<div class="row" {{-- style="background-color: #9068be; min-height: 100%;" --}}>


	<div class="col-lg-2 col-xs-2" {{-- style="background-color: #9068be;" --}}></div>
	<div class="col-lg-8 col-xs-8" style="background-color: #e1e8f0; min-height: 100%; fill: true">
		<h1 class="text-center" style="padding-bottom: 50px;">Twitch Clips</h1>



	<div class="row">
		<div class="col-lg-5 col-xs-4"></div>
		<button class="btn" id="thing">
    		<img src="/images/sneaky.jpg" width="200"/>
		</button>
	</div>
	<div class="row" style="padding-bottom: 40%;">
		<div class="col-lg-5 col-xs-4"></div>
			<button class="btn btn-primary col-lg-2 col-xs-4" id="pause" style="margin-left: 7px;"><i class="fa fa-pause" aria-hidden="true"></i></button>
			
	</div>

	</div>

	<div class="col-lg-2 col-xs-2" {{-- style="background-color: #9068be;" --}}></div>

	

{{--     width: 100%;
    height: 100%;
    min-height: 100%;
    background: red;
    display: block;
 --}}
</div>

</div>

@endsection

@section('scripts')

<link rel="stylesheet" type="text/css" href=/css/style.css>

<script>
	


	var thing = [
		// 'test.mp3',
		// 'test2.mp3',
		// 'test3.mp3',
		'sneaky1.mp3'
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
