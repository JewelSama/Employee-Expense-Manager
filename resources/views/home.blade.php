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
    </head>

    <body>
        <div class="flex flex-row p-4 justify-between" style="background-color: hsl(214, 35%, 21%);">
                <h2 class="text-white text-xl font-bold">Expense Manager</h2>
            <div class="flex flex-row space-x-3">
                <button style="background-color: #2d3d53;color: #66a8ff" class="text-sm p-2 rounded-sm">INFO</button>
                <button style="background-color: #2d3d53; color: #66a8ff" class="text-sm p-2 rounded-sm">LOGOUT</button>
            </div>
        </div>

        <div class="flex flex-row mt-2 justify-between ">

        <div>j</div>
        <div>e</div>
        <div>r</div>


        </div>

        <script>
            $(document).ready(function () {
                $('#dataTable').DataTable();

            });
        </script>
    </body>
</html>
