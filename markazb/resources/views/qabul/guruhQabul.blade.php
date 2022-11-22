@extends('index')
@section('content')
<main class="main-content ">
  
    <div class="conatiner-fluid content-inner mt-5 py-0 row">
     @forelse ($guruh as $guruh)
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>
                        
                        <a href="{{url('guruh',['guruh'=>$guruh->id])}}" >
                            {{$guruh->kun}}     
                        </a> 
                      
                    </h5>
                </div>
               <div>
                <a href="{{url('guruhQabulPupils',['id'=>$guruh->id])}}" class="btn btn-info">
                    add
                </a>
               </div>
                <div class="card-body" style="position: relative;">
                    <p class="fw-lighter fs-3 mb-0 d-flex align-items-center">
                        {{$guruh->g_name}}
                    </p>
                    <small>
                        { guruh vaqti(tez kunda) }
                    </small>
                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 240px; height: 165px;"></div></div><div class="contract-trigger"></div></div></div>
            </div>
        </div>
     @empty
         sizda hali guruhlar yo'q Guruh qo'shing!
     @endforelse
    </div>

</main>
@endsection