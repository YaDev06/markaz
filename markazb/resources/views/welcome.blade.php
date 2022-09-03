<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    <section class="con-md m-10 bg-slate-500 p-4 rounded-md " id="qabul">
        
        <form action="{{route('qabul.store')}}" method="POST" class="grid">
            @csrf
            <div class="mb-6 grid-cols-6  ">
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ism kiriting</label>
                <input type="text" name="ism" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ism yozing    " required="">
            </div>
            <div class="mb-6 grid-cols-6  ">
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ism kiriting</label>
                <input type="text" name="ism" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ism yozing    " required="">
            </div>
            <div class="mb-6 grid-cols-6  ">
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ism kiriting</label>
                <input type="text" name="ism" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ism yozing    " required="">
            </div>
            <div class="mb-6 grid-cols-6 ">
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ism kiriting</label>
                <input type="text" name="ism" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ism yozing    " required="">
            </div>
           
            
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>
    </section>    

<section class="con-md m-10 " id="list-pupils">
    <div class="overflow-x-auto relative">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Product name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Color
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Category
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Price
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Apple MacBook Pro 17"
                    </th>
                    <td class="py-4 px-6">
                        Sliver
                    </td>
                    <td class="py-4 px-6">
                        Laptop
                    </td>
                    <td class="py-4 px-6">
                        $2999
                    </td>
                </tr>
        
            </tbody>
        </table>
    </div>
</section>

</body>
</html>