@extends('index')
@section('content')
<main class="main-content ">
  
    <div class="conatiner-fluid content-inner mt-5 py-0 ">
        <div class="row alert-danger p-4">
    
        <div class="col-lg-6 col-sm-12">
            
            <h2 class="alert alert-danger">
                {{$guruh->g_name}}
                <p class="badge bg-primary">
                    @if ($guruh->g_status===1)
                        active
                    @else
                        inactive
                    @endif
                </p>
            </h2>    
            
        </div>    
        <div class="col-lg-6 col-sm-12">
            <h2 class="alert alert-success">
                {{$guruh->k_name}}
          
            </h2>    
        </div>    
        <div class="col-lg-6 col-sm-12 ">
            <h2 class="alert alert-success">{{$guruh->g_kun}}</h2>    
        </div>
        <div class="col-lg-6 col-sm-12 ">
            <h2 class="alert alert-success">{{$guruh->name}}</h2>    
        </div>
        <div class="col-lg-12 col-sm-6 ">
          
            @if ($guruh->g_status===1)
              <a href=""   class="btn btn-success">guruhni tugatish</a> 
             
               <span class="btn btn-info">
               boshlangan sana: {{substr($guruh->g_start,0,10)}}
               </span>
               <a href="" class="btn btn-primary">Guruhga o'quvchi qo'shish</a>
               <a href="" class="btn btn-success">Maxsus sozlamalar</a>

            @else
                <p href="#" @disabled(true) class="btn btn-success">guruh tugatilgan
                </p>  
                <p>
                    {{$guruh->g_start}} - {{$guruh->g_end}}   
                </p>
            @endif
        </div>
        <div class="col-lg-12 mt-4">
            <div class="accordion-item">
                <h4 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                       O'quvchilar ro'yhati
                    </button>
                </h4>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
        </div>

    </div>
    
    </div>
</main>
@endsection