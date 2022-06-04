
<div class="mb-5">
<div class="border-2 border-bottom pb-2 mb-3">

    <h6 class="text-sm">Active Users</h6>
    <h6 class="text-xs text-color-gray">Showing last active users</h6>

    </div>

    @foreach ($onlineUsers as $onlineUser)

<div class="row align-items-center mt-4 mb-4">
    <div class="col-2">
        <img src="/images/avatar/{{$onlineUser->profile}}" class="rounded-circle me-2" style="width: 30px; height: 30px;">
    </div>

  
    <div class="col">
        
        <h6 class="text-xs text-capitalize text-white">{{$onlineUser->name}}</h6>

        @if(Cache::has('user-is-online-' . $onlineUser->id))
        
        <span class="badge rounded-pill fw-normal text-capitalize" style="background-color: #4ec27e;">Online</span>
  
        @else
        
        <span class="badge rounded-pill fw-normal text-capitalize bg-black text-color-gray">Offline</span>
  
      @endif

       
    
    </div>

   

</div>

@endforeach

</div>
