<!DOCTYPE html>
<html lang="en">
<head>
  <title>JPAIS</title>
  <meta charset="utf-8">
  <link rel="icon" href="<?php echo $base."/".$favicon;?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo $base."/".$bootstrapCss;?>">
  <script src="<?php echo $base."/".$jquery ?>"></script>
  <script src="<?php echo $base."/".$bootstrapJs; ?> "></script>
  <script src="<?php echo $base."/".$formValidateJs; ?> "></script>
  <link rel="stylesheet" href="<?php echo $base."/".$customeCss; ?>">
  <script src="<?php echo $base."/".$datepickerJs; ?> "></script>
  <link rel="stylesheet" href="<?php echo $base."/".$datepickerCss; ?>">
  

  <script type="text/javascript"  src="<?php echo base_url($chartJs);?>"></script>
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }
  .jumbotron {
      background-color: #0091ea;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #0091ea;
      font-size: 50px;
  }
  .logo {
      color: #0091ea;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #0091ea;
  }
  .carousel-indicators li {
      border-color: #0091ea;
  }
  .carousel-indicators li.active {
      background-color: #0091ea;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #0091ea;
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #0091ea;
      background-color: #fff !important;
      color: #0091ea;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #0091ea !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #0091ea;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #0091ea;
      z-index: 9;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #0091ea !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #0091ea;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    }
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    }
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }



  #icon{
    text-shadow: 0px 0px rgb(176, 177, 179), 1px 1px rgb(181, 181, 183), 2px 2px rgb(185, 186, 187), 3px 3px rgb(189, 190, 191), 4px 4px rgb(193, 194, 195), 5px 5px rgb(197, 198, 200), 6px 6px rgb(202, 202, 204), 7px 7px rgb(206, 207, 208), 8px 8px rgb(210, 211, 212), 9px 9px rgb(214, 215, 217), 10px 10px rgb(218, 219, 221), 11px 11px rgb(223, 223, 225), 12px 12px rgb(227, 228, 230), 13px 13px rgb(231, 232, 234), 14px 14px rgb(235, 236, 238), 15px 15px rgb(239, 240, 242), 16px 16px rgb(244, 245, 247), 17px 17px rgb(248, 249, 251);
  font-size: 113px;
  color: rgb(79, 179, 255);
  background-color: rgb(252, 253, 255);
  height: 120px;
  width: 120px;
  line-height: 120px;
  border-radius: 50%;
  overflow: hidden;
  text-align: center;
  
  }
  
  body {
    margin-top:40px;
}
.stepwizard-step p {
    margin-top: 10px;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 50%;
    position: relative;
}
.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}
.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
	
	
	
	button:last-of-type {
  margin: 0;
}

p.borderBelow {
  margin: 0 0 20px 0;
  padding: 0 0 20px 0;
}

video {
  height: 232px;
  margin: 0 12px 20px 0;
  vertical-align: top;
  width: calc(20em - 10px);
}


video:last-of-type {
  margin: 0 0 20px 0;
}

video#gumVideo {
  margin: 0 20px 20px 0;
}

@media screen and (max-width: 500px) {
  button {
    font-size: 0.8em;
    width: calc(33% - 5px);
  }
}

@media screen and (max-width: 720px) {
  video {
    height: calc((50vw - 48px) * 3 / 4);
    margin: 0 10px 10px 0;
    width: calc(50vw - 48px);
  }

  video#gumVideo {
    margin: 0 10px 10px 0;
  }
}

  
  
}




  </style>














  <script>
  $(document).ready(function(){
  $('#datepicker').datepicker({
    format: 'mm-dd-yyyy'
  });



  $(document).on('click', '.browse', function(){
  var file = $(this).parent().parent().parent().find('.file');
  file.trigger('click');
  });
  $(document).on('change', '.file', function(){
  $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
  });


  var navListItems = $('div.setup-panel div a'),
          allWells = $('.setup-content'),
          allNextBtn = $('.nextBtn'),
  		  allPrevBtn = $('.prevBtn');

  allWells.hide();

  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this);

      if (!$item.hasClass('disabled')) {
          navListItems.removeClass('btn-primary').addClass('btn-default');
          $item.addClass('btn-primary');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
  });
  
  allPrevBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          prevStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

          prevStepWizard.removeAttr('disabled').trigger('click');
  });

  allNextBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
          curInputs = curStep.find("input[type='text'],input[type='url']"),
          isValid = true;

      $(".form-group").removeClass("has-error");
      for(var i=0; i<curInputs.length; i++){
          if (!curInputs[i].validity.valid){
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
          }
      }

      if (isValid)
          nextStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-primary').trigger('click');
  
  
  
  
  //recorder
  var mediaSource = new MediaSource();
mediaSource.addEventListener('sourceopen', handleSourceOpen, false);
var mediaRecorder;
var recordedBlobs;
var sourceBuffer;

var gumVideo = document.querySelector('video#gum');
var recordedVideo = document.querySelector('video#recorded');

var recordButton = document.querySelector('button#record');
var playButton = document.querySelector('button#play');
var downloadButton = document.querySelector('button#download');
recordButton.onclick = toggleRecording;
playButton.onclick = play;
downloadButton.onclick = download;

// window.isSecureContext could be used for Chrome
var isSecureOrigin = location.protocol === 'https:' ||
location.hostname === 'localhost';
if (!isSecureOrigin) {
  alert('getUserMedia() must be run from a secure origin: HTTPS or localhost.' +
    '\n\nChanging protocol to HTTPS');
  location.protocol = 'HTTPS';
}

var constraints = {
  audio: true,
  video: true
};

function handleSuccess(stream) {
  recordButton.disabled = false;
  console.log('getUserMedia() got stream: ', stream);
  window.stream = stream;
  if (window.URL) {
    gumVideo.src = window.URL.createObjectURL(stream);
  } else {
    gumVideo.src = stream;
  }
}

function handleError(error) {
  console.log('navigator.getUserMedia error: ', error);
}

navigator.mediaDevices.getUserMedia(constraints).
    then(handleSuccess).catch(handleError);

function handleSourceOpen(event) {
  console.log('MediaSource opened');
  sourceBuffer = mediaSource.addSourceBuffer('video/webm; codecs="vp8"');
  console.log('Source buffer: ', sourceBuffer);
}

recordedVideo.addEventListener('error', function(ev) {
  console.error('MediaRecording.recordedMedia.error()');
  alert('Your browser can not play\n\n' + recordedVideo.src
    + '\n\n media clip. event: ' + JSON.stringify(ev));
}, true);

function handleDataAvailable(event) {
  if (event.data && event.data.size > 0) {
    recordedBlobs.push(event.data);
  }
}

function handleStop(event) {
  console.log('Recorder stopped: ', event);
}

function toggleRecording() {
  if (recordButton.textContent === 'Start Recording') {
    startRecording();
  } else {
    stopRecording();
    recordButton.textContent = 'Start Recording';
    playButton.disabled = false;
    downloadButton.disabled = false;
  }
}

function startRecording() {
  recordedBlobs = [];
  var options = {mimeType: 'video/webm;codecs=vp9'};
  if (!MediaRecorder.isTypeSupported(options.mimeType)) {
    console.log(options.mimeType + ' is not Supported');
    options = {mimeType: 'video/webm;codecs=vp8'};
    if (!MediaRecorder.isTypeSupported(options.mimeType)) {
      console.log(options.mimeType + ' is not Supported');
      options = {mimeType: 'video/webm'};
      if (!MediaRecorder.isTypeSupported(options.mimeType)) {
        console.log(options.mimeType + ' is not Supported');
        options = {mimeType: ''};
      }
    }
  }
  try {
    mediaRecorder = new MediaRecorder(window.stream, options);
  } catch (e) {
    console.error('Exception while creating MediaRecorder: ' + e);
    alert('Exception while creating MediaRecorder: '
      + e + '. mimeType: ' + options.mimeType);
    return;
  }
  console.log('Created MediaRecorder', mediaRecorder, 'with options', options);
  recordButton.textContent = 'Stop Recording';
  playButton.disabled = true;
  downloadButton.disabled = true;
  mediaRecorder.onstop = handleStop;
  mediaRecorder.ondataavailable = handleDataAvailable;
  mediaRecorder.start(10); // collect 10ms of data
  console.log('MediaRecorder started', mediaRecorder);
}

function stopRecording() {
  mediaRecorder.stop();
  console.log('Recorded Blobs: ', recordedBlobs);
  recordedVideo.controls = true;
}

function play() {
  var superBuffer = new Blob(recordedBlobs, {type: 'video/webm'});
  recordedVideo.src = window.URL.createObjectURL(superBuffer);
}

function download() {
  var blob = new Blob(recordedBlobs, {type: 'video/webm'});
  var url = window.URL.createObjectURL(blob);
  var a = document.createElement('a');
  a.style.display = 'none';
  a.href = url;
  a.download = 'test.webm';
  document.body.appendChild(a);
  a.click();
  setTimeout(function() {
    document.body.removeChild(a);
    window.URL.revokeObjectURL(url);
  }, 100);
}

  
  
  
  
  
  
  
  
  
  
});
  
  //
  


       




  </script>
</head>
<body id="myPage" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href=""><p id="icon">J</p></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#a" data-toggle="modal" data-target="#myModal2">Login</a></li>
        <li><a href="#" data-toggle="modal" data-target="#myModal" >Register Jobseeker</a></li>
        <li><a href="#" data-toggle="modal" data-target="#myModal1">Register Employer</a></li>
        <li><a href="<?php echo base_url();?>home/aboutPage">About</a></li>
        <li><a href="<?php echo site_url('home/contactPage');?>">Contact</a></li>
      
      </ul>

    </div>

  </div>
</nav>

<div class="jumbotron text-center">
  <h1>JPAIS</h1>
  <p>Find Job that fits you</p>
  <form class="form-inline" method="post" action="<?php echo site_url('/home/search');?>">
    <div class="input-group">
      <input type="text" class="form-control" size="50" placeholder="e.g computer engineer" name="searchName">
      <div class="input-group-btn">
        <button type="submit" class="btn btn-default">
<span class="glyphicon glyphicon-search"></span>
Search</button>
      </div>
    </div>
  </form>
</div>
