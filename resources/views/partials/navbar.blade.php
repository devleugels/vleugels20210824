<div class="navbar mx-auto mb-2 shadow-lg bg-neutral text-neutral-content rounded-box" >
  <div class="navbar-start flex-1 px-2 mx-2">
    <span class="text-lg font-bold">
        <img src = "{{ asset('/img/logovleugels.png') }}" width="88" height="48">
    </span>
  </div> 
  <div class="navbar-center"></div>
  <div class="navbar-end flex-none hidden px-2 mx-2 lg:flex">
    
    @guest
            <div class="flex items-stretch">
                <a class="btn btn-ghost btn-sm rounded-btn" href="#">
                    {{ __('Login') }}
                </a>
            </div>

            <div class="flex items-stretch">
                <a class="btn btn-ghost btn-sm rounded-btn" href="#">
                    Stel je vraag
                </a>
            </div>
    @else
        <div>geen guest - dus aangemeld</div>
	@endguest 
  </div> 


</div>

