@extends('index')
@section('style')
    <style>
          
label {
    width: 100%;
}

.card-input-element {
    display: none;
}

.card-input {
    margin: 10px;
    padding: 10px;
    border: 2px solid rgb(96, 138, 28);
    border-radius: 10px;
}

.card-input:hover {
    cursor: pointer;
}

.card-input-element:checked + .card-input {
    color: rgb(255, 251, 0);
    font-size: 15px;
    border-radius: 20px;
    background-color: rgba(139, 0, 37, 0.532);
     box-shadow: 0 0 1px 1px #5e1c08;
 }

    </style>

@endsection
@section('content')

<main class="main-content ">
  
    <div class="conatiner-fluid content-inner mt-5 py-0">
      <div class="row">
       
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">  
            <strong>{{ $message }}</strong>
            <a href="{{route('showPupils')}}">Ro'yhatni ko'rish</a>
        </div>
        @endif
  
           <form action="{{route('qabul.store')}}" method="POST" class="container row alert alert-success">
               @csrf
            @method('POST')
                  <div class="mb-3 col-lg-12 col-md-12">
                    <label for="name" class="form-label">Ism va familiyasi</label>
                    <input type="text" name="ism" class="form-control" id="name" aria-describedby="name">
                    <div id="name" class="form-text">O'quvchining ism va familiyasi</div>
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="tel1" class="form-label">Telefon raqami 1</label>
                    <input type="number" name="tel1" class="form-control" id="tel1" aria-describedby="tel">
                   
                    <div id="tel" class="form-text">O'quvchining telefon raqami majburiy</div>
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="tel2" class="form-label">Telefon raqami 2</label>
                    <input type="number" name="tel2" class="form-control" id="tel1" aria-describedby="tel">
                    <div id="tel" class="form-text">O'quvchining telefon raqami 2</div>
                </div>
                <div class="mb-3 row col-lg-12 col-md-12">
                    <div  class=" col-md-4 col-lg-3 col-sm-4">
        
                        <label>
                          <input type="radio" value="1" name="kurs_vaqt" class="card-input-element" />
                
                            <div class="panel panel-default card-input">
                              <div class="panel-heading">Farqi yo'q</div>
                              <div class="panel-body">
                               kun davomida 
                              </div>
                            </div>
                        </label>
                        
                    </div>
                    <div  class=" col-md-4 col-lg-3 col-sm-4">
        
                        <label>
                          <input type="radio" value="2" name="kurs_vaqt" class="card-input-element" />
                
                            <div class="panel panel-default card-input">
                              <div class="panel-heading">Abetdan oldin</div>
                              <div class="panel-body">
                                13:00dan oldin
                              </div>
                            </div>
                        </label>
                        
                    </div>
                    <div  class=" col-md-4 col-lg-3 col-sm-4">
        
                        <label>
                          <input type="radio" value="3" name="kurs_vaqt" class="card-input-element" />
                
                            <div class="panel panel-default card-input">
                              <div class="panel-heading">Abetdan keyin</div>
                              <div class="panel-body">
                                13:00dan keyin
                              </div>
                            </div>
                        </label>
                        
                    </div>
                </div>
                <hr>
                
                <div class="mb-3 row col-lg-12 col-md-12">
                    <div  class=" col-md-4 col-lg-3 col-sm-4">
        
                        <label>
                          <input type="radio" value="1" name="kurs_kun" class="card-input-element" />
                
                            <div class="panel panel-default card-input">
                              <div class="panel-heading">Farqsiz</div>
                              <div class="panel-body">
                               haftaning istalgan kunida
                              </div>
                            </div>
                        </label>
                        
                    </div>
                    <div  class=" col-md-4 col-lg-3 col-sm-4">
        
                        <label>
                          <input type="radio" value="2" name="kurs_kun" class="card-input-element" />
                
                            <div class="panel panel-default card-input">
                              <div class="panel-heading">Dushanba-Chorshanba-Juma</div>
                              <div class="panel-body">
                               
                              </div>
                            </div>
                        </label>
                        
                    </div>
                    <div  class=" col-md-4 col-lg-3 col-sm-4">
        
                        <label>
                          <input type="radio" value="3" name="kurs_kun" class="card-input-element" />
                
                            <div class="panel panel-default card-input">
                              <div class="panel-heading">Seshanba-Payshanba-Shanba</div>
                              <div class="panel-body">
                               
                              </div>
                            </div>
                        </label>
                        
                    </div>
                </div>
                <hr>
                <div class="mb-3 row col-lg-12 col-md-12">
                    @forelse ($kurs as $kurs)
                        <div  class=" col-md-4 col-lg-3 col-sm-4">
            
                            <label>
                            <input type="checkbox" value="{{$kurs->id}}" name="kurs_name[]" class="card-input-element" />
                    
                                <div class="panel panel-default card-input">
                                <div class="panel-heading">{{$kurs->k_name}}</div>
                              
                                </div>
                            </label>
                            
                        </div>
                    @empty
                        
                    @endforelse
                   
                 
                </div>
                <hr>
                <div class="mb-3 row col-lg-12 col-md-12 ">
                  <div class="row">
                    <p class="col-2">
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                          Izoh qo'shish 
                        </a>
                       
                    </p>
                    <div class="col-2">
                        <input type="reset" class="btn btn-danger" value="malumotlarni o'chirish">
                    </div>

                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            <textarea name="izoh" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <input type="submit" class="btn btn-success"  value="jo'natish">
                  </div>

                </div>

                
           </form>

        </div>
    </div>
    <!-- Footer Section Start -->
    <footer class="footer border-top">
        <div class="footer-body">
            <ul class="left-panel list-inline mb-0 p-0">
                <li class="list-inline-item"><a href="#">Dastur bilan tanishish</a></li>
            </ul>
            <div class="right-panel">
               
                <span class="text-gray">
                    Design
                </span> by <a href="https://iqonic.design/">IQONIC Design</a>.
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
</main>
@endsection
