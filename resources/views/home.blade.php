<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Expense Manager</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">   
        <script src="https://unpkg.com/flowbite@1.5.3/dist/datepicker.js"></script>
        <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.tailwindcss.com"></script>
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

            <div class="hidden shadow-inner lg:block px-4 py-2  w-80"  style="background-color: #f3f5f7;">
                <div class="flex flex-row border-b py-2  border-gray-300 justify-between">
                    <span class="text-sm text-gray-600">Filter Expenses</span>
                    <span class="text-sm text-blue-600 cursor-pointer">Clear Filters</span>
                </div>


                    <div date-rangepicker="" class="flex mt-7 flex-col ">
                      <span class="text-sm text-gray-500">From</span>
                      <div class="relative mb-3">
                        <div class="flex absolute inset-y-0 right-2 items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                        </div>
                        <input name="start" type="text" class="bg-gray-300 border border-gray-300 text-gray-900 sm:text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2  datepicker-input" >
                      </div>
                      <span class="text-sm text-gray-500">To</span>
                      <div class="relative mb-3">
                            <div class="flex absolute inset-y-0 right-2 items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                            </div>
                            <input name="end" type="text" class="bg-gray-300 border border-gray-300 text-gray-900 sm:text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2  datepicker-input">
                        </div>
                    </div>
                    <div class="flex flex-row justify-between space-x-1">
                        <div>
                            <span class="text-sm text-gray-500">Min</span>
                            <div class="relative mb-3">
                                <input name="end" type="number" class="bg-gray-300 border border-gray-300 text-gray-900 sm:text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-28 pl-10 p-2  datepicker-input">
                            </div>
                        </div>
                        <span class="flex items-center">-</span>
                        <div>
                            <span class="text-sm text-gray-500">Max</span>
                            <div class="relative mb-3">
                                <input name="end" type="number" class="bg-gray-300 border border-gray-300 text-gray-900 sm:text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-28 pl-10 p-2  datepicker-input">
                            </div>
                        </div>
                      
                    </div>
                    
                    <label for="countries" class="text-sm text-gray-500">Merchant</label>
                    <select id="countries" class="bg-gray-300 border mb-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 ">
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

            <div class="flex relative justify-center overflow-scroll h-full w-full">
                <div class=" w-full p-0"> 

<table id="example" class="table overflow-auto" style="width:100%;">
        <thead>
            <tr>
                <th class="font-normal text-gray-700 text-sm">Date</th>
                <th class="font-normal text-gray-700 text-sm">Merchant</th>
                <th class="font-normal text-gray-700 text-sm">Total</th>
                <th class="font-normal text-gray-700 text-sm">Status</th>
                <th class="font-normal text-gray-700 text-sm">Comment</th>
            </tr>
        </thead>
        <tbody>
        <tr onclick="toggleModal('modal-id')" class="hover:bg-gray-200 cursor-pointer">
            <td class="text-gray-700">2011-04-25</td>
            <td class="text-gray-700">Office supplies</td>
            <td class="text-gray-700">₦320,800</td>
            <td class="text-red-500">New</td>
            <td class="text-gray-700">Expense from my business trip</td>
        </tr>
        <tr onclick="toggleModal('modal-id')" class="hover:bg-gray-200 cursor-pointer">
            <td class="text-gray-700">2011-03-20</td>
            <td class="text-gray-700">Hotel</td>
            <td class="text-gray-700">₦320,850</td>
            <td class="text-gray-500 italic">In Progress</td>
            <td class="text-gray-700">Expense from my business trip</td>
        </tr>
        <tr onclick="toggleModal('modal-id')" class="hover:bg-gray-200 cursor-pointer">
            <td class="text-gray-700">2011-02-20</td>
            <td class="text-gray-700">Hotel</td>
            <td class="text-gray-700">₦320,850</td>
            <td class="text-gray-500 ">Reimbursed</td>
            <td class="text-gray-700">Expense from my business trip</td>
        </tr>
        <!-- <tr onclick="toggleModal('modal-id')" class="hover:bg-2ray-300 cursor-pointer ">
            <td class="text-gray-700">2011-02-20</td>
            <td class="text-gray-700">Hotel</td>
            <td class="text-gray-700">₦320,850</td>
            <td class="text-gray-500 ">Reimbursed</td>
            <td class="text-gray-700">Expense from my business trip</td>
        </tr> -->
        
       
        
            
</tbody>
<tfoot class="hidden">
            <tr>
                <th>Date</th>
                <th>Merchant</th>
                <th>Total</th>
                <th>Status</th>
                <th>Comment</th>
            </tr>
        </tfoot>

</table>




</div>

        <button  type="button" onclick="toggleModal('modal-id')" class=" absolute bg-[#ff4238] hover:bg-[#ccc] bottom-56 right-2 md:bottom-8 md:right-3 flex p-2 h-14 w-14 items-center justify-center rounded-full" >
        <i class="fa fa-plus text-white" aria-hidden="true"></i>

        </button>

        <!-- add-to modal -->

<!-- Modal toggle -->


<!-- Main modal -->


<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-id">
  <div class="relative w-80 py-2 px-7  md:w-auto md:h-auto my-6 mx-auto">
    <!--content-->
    <div class="border-0 rounded-md shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
      <!--header-->
      <div class="flex md:flex-row flex-col md:space-x-8 justify-between items-center  md:p-4">
        <div class="md:w-80 w-1/2">
            <h2 class="font-bold text-2xl md:mt-4 md:mb-3">Add Expense</h2>
        <div>
            <label for="countries" class="text-sm text-gray-500">Merchant*</label>
                    <select id="countries" class="bg-gray-200 border mb-2 border-gray-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 ">
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
        </div>

                    <div>
                        <span class="text-sm text-gray-500">Total*</span>
                        <div class="relative mb-3">
                        <input name="end" type="number" class="bg-gray-200 border border-gray-200 text-gray-900 sm:text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2  datepicker-input">
                        </div>
                        </div>

                        <div>
                        <span class="text-sm text-gray-500">Date*</span>
                      <div class="relative mb-3">
                        <div class="flex absolute inset-y-0 right-2 items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                        </div>
                        <input name="start" type="text" class="bg-gray-200 border border-gray-200 text-gray-900 sm:text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2  datepicker-input" >
                      </div>
                        </div>

                        <div class="mb-2">
                        <span class="text-sm text-gray-500">Comment</span>
                        <div class="relative mb-3">
                        <textarea name="end" type="text" class="bg-gray-200 border border-gray-200 text-gray-900 sm:text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full h-28 pl-10 p-2"></textarea>
                        </div>
                        </div>
                        <div class="flex items-center space-x-3 mb-2">
                        <button class="bg-blue-500 text-white active:bg-blue-600 hover:bg-blue-600 font-semibold px-4  text-md py-2 rounded-sm  ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
                          Save
                        </button>
                        <button class="text-blue-500 bg-gray-200  px-2 py-2 text-md hover:bg-blue-500 hover:text-gray-200  rounded-sm   ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
                            Cancel
                        </button>
                        </div>



        </div>
        <div class="flex justify-center md:h-96 items-center w-1/2 md:w-80">    
        <label for="dropzone-file" class="flex flex-col justify-center items-center w-full h-full bg-white rounded-lg border-2 border-gray-100 border-dashed cursor-pointer dark:hover:bg-gray-200 dark:bg-white hover:bg-gray-100 dark:border-gray-300 dark:hover:border-gray-500 dark:hover:bg-gray-600">
            <!-- <div class="flex flex-col justify-center items-center pt-5 pb-6">
                <svg aria-hidden="true" class="mb-3 w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
            </div>
            <input id="dropzone-file" type="file" class="hidden" /> -->
            <input class="form-control" id="formFileSm" name="Browse files" type="file">
        </label>
        </div>
      </div>
       
      
    </div>
  </div>
</div>
<div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>



            </div>

            <div>
            <div class=" hidden xl:block w-72 px-4 py-3 shadow-inner"  style="background-color: #f3f5f7; height: 100%">
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
                $('#example').DataTable({
                    paging: false,
                    searching: false,
                    bInfo: false
                });
            });
            function toggleModal(modalID){
    document.getElementById(modalID).classList.toggle("hidden");
    document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
    document.getElementById(modalID).classList.toggle("flex");
    document.getElementById(modalID + "-backdrop").classList.toggle("flex");
  }
        </script>
        
    </body>
</html>
