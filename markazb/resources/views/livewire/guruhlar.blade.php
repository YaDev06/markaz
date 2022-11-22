<main class="main-content ">
    <div class="card-body px-0">
        <div class="table-responsive">
            {{-- <div class="alert alert-info flex justify-between   m-10 p-6">
                <button class="btn btn-info ">Dushanba-Chorshanba-Juma</button>
                <button class="btn btn-info ">Farqsiz</button>
                <button class="btn btn-info ">Seshanba-Payshanba_shanba</button>
            </div> --}}
            <table id="user-list-table" class="table table-striped" role="grid" data-toggle="data-table">
                <thead>
                    <tr class="ligth">
                        <th>No</th>
                        <th>Guruh</th>
                        <th>teacher</th>
                       
                        <th>Kurs</th>
                        <th>start</th>
                        <th>end</th>
                        <th>kunlar</th>
                        <th>vaqt</th>
                       
                    </tr>
                </thead>
                <tbody>
                    @forelse ($qabul as $qabul)
                    <tr>

                        <td class="text-center">
                           {{$loop->index+1}}
                        </td>   
                        <td>{{$qabul->g_name}}</td>
                        <td>{{$qabul->name}}</td>
                        <td><span class="text-primary p-2 alert alert-danger">{{$qabul->k_name}}</span></td>
                        <td>
                            {{substr($qabul->g_start,0,10)}}
                        </td>
                        <td>
                            {{ substr(\Carbon\Carbon::parse($qabul->g_start)->addMonth(),0,10) }}
                        </td>
                        <td>
                            {{$qabul->kun}}
                        </td>
                        <td>
                            {{$qabul->vaqt}}
                          
                        </td>
                       
                    </tr>
                    @empty
                        O'quvchilar topilmadi
                    @endforelse   
                </tbody>
            </table>
        </div>
    </div>
   
</main>