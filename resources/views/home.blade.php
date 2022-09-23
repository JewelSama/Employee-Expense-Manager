<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Expense Manager</title>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
            
        <script src="https://unpkg.com/flowbite@1.5.3/dist/datepicker.js"></script>

    </head>

    <body>
    <div class="h-screen">
        <div class="flex flex-row items-center px-4 justify-between" style="background-color: hsl(214, 35%, 21%); height: 10%;">
                <h2 class="text-white text-xl font-bold">Expense Manager</h2>
            <div class="flex flex-row space-x-3">
                <button style="background-color: #2d3d53;color: #66a8ff" class="text-sm p-2 rounded-sm">INFO</button>
                <button style="background-color: #2d3d53; color: #66a8ff" class="text-sm p-2 rounded-sm">LOGOUT</button>
            </div>
        </div>

        <div  class="flex flex-row md:justify-between  justify-center" style="height: 90%;">

            <div class=" hidden shadow-inner lg:block px-6 py-4  w-80"  style="background-color: #f3f5f7;">
                <div class="flex flex-row border-b py-2 border-gray-300 justify-between">
                    <span class="text-sm text-gray-600">Filter Expenses</span>
                    <span class="text-sm text-blue-600 cursor-pointer">Clear Filters</span>
                </div>


                    <div date-rangepicker="" class="flex mt-7 flex-col ">
                      <span class="text-sm text-gray-500">From</span>
                      <div class="relative mb-5">
                        <div class="flex absolute inset-y-0 right-2 items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                        </div>
                        <input name="start" type="text" class="bg-gray-300 border border-gray-300 text-gray-900 sm:text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600  dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input" >
                      </div>
                      <span class="text-sm text-gray-500">To</span>
                      <div class="relative mb-5">
                            <div class="flex absolute inset-y-0 right-2 items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                            </div>
                            <input name="end" type="text" class="bg-gray-300 border border-gray-300 text-gray-900 sm:text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600  dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input">
                        </div>
                    </div>
                    <div class="flex flex-row justify-between">
                        <div>
                            <span class="text-sm text-gray-500">Min</span>
                            <div class="relative mb-5">
                                <input name="end" type="number" class="bg-gray-300 border border-gray-300 text-gray-900 sm:text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-28 pl-10 p-2 dark:bg-gray-700 dark:border-gray-600  dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input">
                            </div>
                        </div>
                        <span class="flex items-center">—</span>
                        <div>
                            <span class="text-sm text-gray-500">Max</span>
                            <div class="relative mb-5">
                                <input name="end" type="number" class="bg-gray-300 border border-gray-300 text-gray-900 sm:text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-28 pl-10 p-2 dark:bg-gray-700 dark:border-gray-600  dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input">
                            </div>
                        </div>
                      
                    </div>
                    
                    <label for="countries" class="text-sm text-gray-500">Merchant</label>
                    <select id="countries" class="bg-gray-300 border mb-5 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600  dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option value="" selected></option>
                      <option value="US">Office Supplies</option>
                      <option value="CA">Electronics</option>
                      <option value="FR">Hotel</option>
                      <option value="DE">Live Sharing</option>
                      <option value="DE">Fast Food</option>
                      <option value="DE">Rental Car</option>
                      <option value="DE">Breakfast</option>
                      <option value="DE">Airline</option>
                      <option value="DE">Parking</option>
                      <option value="DE">Anime</option>
                      <option value="DE">Shuttle</option>
                      <option value="DE">Restaurant</option>
                      <option value="DE">Taxi</option>
                    </select>

                    <label for="countries" class="text-sm text-gray-500">Status</label>
                    <div class="items-center mt-1 flex ">
                        <div class="items-center flex">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300  dark:ring-offset-gray-800  dark:bg-gray-700 dark:border-gray-600">
                            <label for="disabled-checkbox" class="ml-2 text-gray-800">New</label>
                        </div>
                        <div class="items-center ml-3 flex">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300  dark:ring-offset-gray-800  dark:bg-gray-700 dark:border-gray-600">
                            <label for="disabled-checkbox" class="ml-2 text-gray-800">In Progress</label>
                        </div>
                    </div>
                    <div class="items-center mt-1 flex">
                        <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300  dark:ring-offset-gray-800  dark:bg-gray-700 dark:border-gray-600">
                        <label for="disabled-checkbox" class="ml-2 text-gray-800">Reimbursed</label>
                    </div>


            </div>

            <div class="flex justify-center  h-full">
                <div>e</div>
            </div>

            <div>
            <div class=" hidden xl:block w-80 px-6 py-4 shadow-inner"  style="background-color: #f3f5f7; height: 100%">
            <div class="flex flex-row border-b py-2 border-gray-300 justify-between">
                    <span class="text-sm text-gray-600">To be reimbursed</span>
                </div>
                <span class="text-3xl justify-center self-center flex mt-11">₦12,439</span>
            </div>
            </div>

        </div>
        </div>
        <script>
            $(document).ready(function () {
                $('#dataTable').DataTable();

            });
        </script>
    </body>
</html>
