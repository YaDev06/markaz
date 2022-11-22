@extends('index')
@section('content')
<main class="main-content ">
  
    <div class="conatiner-fluid content-inner mt-5 py-0">
        <h2>{{$vaqt}}</h2>
        <div>
            <form action="{{route('addguruh')}}">
             @csrf
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">{{$guruh->g_name}} guruhida qo'shmoqchisiz</h4>
                            </div>
                            <p>
                                <input type="submit" class="btn btn-info" value="qo'shish" name="" id="">
                            </p>
                        </div>
                        <div class="card-body px-0">
                            <div class="table-responsive">
                                <table id="user-list-table" class="table table-striped" role="grid" data-toggle="data-table">
                                    <thead>
                                        <tr class="ligth">
                                            <th>No</th>
                                            <th>Ism</th>
                                            <th>Tel 1</th>
                                           
                                            <th>Kurs</th>
                                            <th>Vaqt</th>
                                            <th>Kun</th>
                                            <th>Kelgan vaqti</th>
                                            <th style="min-width: 100px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($qabul as $qabul)
                                        <tr>

                                            <td class="text-center">
                                               {{$loop->index+1}}
                                                <input type="checkbox" value="{{$qabul->qabul_id}}" name="check[]" >
                                            </td>   
                                            <td>{{$qabul->name}}</td>
                                            <td>{{$qabul->tel1}}</td>
                                        
                                            <td><span class="text-primary p-2 alert alert-danger">{{$qabul->k_name}}</span></td>
                                            <td>
                                                @if ($qabul->vaqt==1)
                                                    13:00dan oldin   
                                                @else
                                                    13:00dan keyin 
                                                @endif
                                            </td>
                                            <td>
                                                @if ($qabul->kun==1)
                                                    Dushanba-Chorshanba-Juma
                                                @else
                                                    Seshanba-Payshanba-Shanba
                                                @endif
                                            </td>
                                            <td>
                                                {{$qabul->created_at}}
                                            </td>
                                       
                                        </tr>
                                        @empty
                                            O'quvchilar topilmadi
                                        @endforelse
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            </div>
        </div>
    </div>
</main>
@endsection