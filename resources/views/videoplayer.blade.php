@foreach($company_main as $company)
@section('title', "{$company->cname}")
@section('path', "{$company->clogo}")
@endforeach
@include('includes/header')
<div class="pagecontainer">

  @foreach($company_main as $company)
  <div class="logobox">
    <img src="{{asset('images/'.$company->clogo)}}" class="img-logo" /> <br> 
  </div>
  <div class="logobox">
  <p>WELCOME, {{$company->cname}}</p>
  </div>
    @endforeach
    <!-- MAIN CONTENT-->
    <div class="main-content">
            <div class="container-fluid">
              <div class="div-vh responsive" >
                <ul class="list-unstyled" tabindex="0" id="list" >
                @foreach($channel_main as $index=>$channel)
                  <li class="white li-style li-style{{$channel->id}}" onclick="selectchannel({{$channel->id}})">&nbsp;&nbsp; {{$index+1}}  &nbsp;&nbsp;&nbsp;&nbsp; <img src="{{asset('images/'.$channel->logo)}}" class="img-50"/> &nbsp;&nbsp; {{$channel->name}} </li>
                  <br>
                @endforeach
              </div>
              <div class="videobox">
               <video id="video" controls  src="{{asset('videos/abcbank.mp4')}}" autoplay loop ></video>
              </div>
        </div>
    </div>
    <div class="navbottom">
      <h4 class="white">Press Enter for Full Screen Or click here</h4> &nbsp; &nbsp; &nbsp;
      <button class="btn btn-info" id='fs'  > Full Screen</button>    
      </div>
</div>

@include('includes/footer')
<script>
function selectchannel(cid){
let id=cid;
$('.li-style'+id).addClass('active-li').siblings().removeClass('active-li');
$.ajax({
    url:'{{route("getvideo")}}',
    type:'post',
    data:{
        _token: '{{csrf_token()}}',
        id:id,
    },
    success:function(response){
        let video = document.getElementById('video');
    let videoSrc = response.url;
  if (Hls.isSupported()) {
    let hls = new Hls();
    hls.loadSource(videoSrc);
    hls.attachMedia(video);
  }
  $("#video")[0].autoplay = true;
    }
});

}
</script>
<script>
$(document).keypress(function(event) {
  var clickvalue=$('#video').attr('clickvalue');
  if (event.key === "Enter") {
    document.getElementsByTagName('video')[0].requestFullscreen();
//     if(clickvalue==1){
//     $('#video').css('height','100%');
//     $('#video').css('width','100%');
//     $('#video').attr('clickvalue','2');
//     $('#fs').attr('btnclickvalue','2');
//     $('#fs').html('Small Screen');
//     }
//     else if(clickvalue==2){
//     $('#video').css('height','300px');
//     $('#video').css('width','500px');
//     $('#video').attr('clickvalue','1');
//     $('#fs').attr('btnclickvalue','1');
//     $('#fs').html('Full Screen');
// } 
}

});

  $('#fs').on('click',function(){
    document.getElementsByTagName('video')[0].requestFullscreen();
//     var btnclickvalue=$('#fs').attr('btnclickvalue');
//     if(btnclickvalue==1){
//     $('#video').css('height','100%');
//     $('#video').css('width','100%');
//     $('#fs').attr('btnclickvalue','2');
//     $('#fs').html('Small Screen');
//     }
//     else if(btnclickvalue==2){
//     $('#video').css('height','300px');
//     $('#video').css('width','500px');
//     $('#fs').attr('btnclickvalue','1');
//     $('#fs').html('Full Screen');
    
// } 
  });

  
 $('.div-vh').animate({
   scrolltop:$('.div-vh').scrollTop()},500);


</script>
