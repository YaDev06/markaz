@extends('layout')
@section('content')
<section class="con-md m-10 bg-slate-500 p-4 rounded-md " id="qabul">
        
    <form action="{{route('qabul.store')}}" method="POST" class="grid">
        @csrf
        <div class="m-4 grid-cols-6  ">
            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ism kiriting</label>
            <input type="text" name="name" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ism yozing    " required="">
        </div>
        <div class="m-4 grid-cols-6  ">
            <label for="tel1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">tel 1</label>
            <input type="text" name="tel1" id="tel1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ism yozing    " required="">
        </div>
        <div class="m-4 grid-cols-6  ">
            <label for="tel2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">tel 2</label>
            <input type="text" name="tel2" id="tel2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ism yozing    " required="">
        </div>
        <div class="m-4 grid-cols-6 ">
            <label for="kurs" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">kursni tanlang</label>
            <select name="kurs" id="kurs" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @forelse ($kurs as $kurs)
                    <option value="{{$kurs->id}}">{{$kurs->name}}</option>
                @empty
                <option>kurs yo'q</option>

                @endforelse
            </select>
        </div>
       <div class="flex justify-between">
        <div class="m-4 w-full ">
            <label for="kurs" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">kursni tanlang</label>
            <select name="kurs" id="kurs" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @forelse ($kursVaqt as $kursVaqt)
                    <option value="{{$kursVaqt->id}}">{{$kursVaqt->vaqt}}</option>
                @empty
                <option>vaqt</option>
                    
                @endforelse
            </select>
        </div>
        <div class="m-4 w-full ">
            <label for="kurs" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">kursni tanlang</label>
            <select name="kurs" id="kurs" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @forelse ($kursVaqt as $kursVaqt)
                    <option value="{{$kursVaqt->id}}">{{$kursVaqt->vaqt}}</option>
                @empty
                <option>vaqt</option>
                    
                @endforelse
            </select>
        </div>
       </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>
    
</section>   
@endsection