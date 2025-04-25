<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SF</title>

    {{-- JQuery --}}
    <script src="assets/jquery/jquery-3.7.1.min.js"></script>
    <script src="../assets/jquery/jquery-3.7.1.min.js"></script>
    <script src="assets/jquery/jquery-3.7.0.js"></script>
    <script src="../assets/jquery/jquery-3.7.0.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    {{-- end JQuery --}}

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="assets/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/Bootstrap/css/bootstrap.min.css">
    <script src="assets/Bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/Bootstrap/js/bootstrap.min.js"></script>
    <link href="/assets/demo/dist/css/tabler.min.css?1684106062" rel="stylesheet" />
    <link href="/assets/demo/dist/css/tabler-flags.min.css?1684106062" rel="stylesheet" />
    <link href="/assets/demo/dist/css/tabler-payments.min.css?1684106062" rel="stylesheet" />
    <link href="/assets/demo/dist/css/tabler-vendors.min.css?1684106062" rel="stylesheet" />
    <link href="/assets/demo/dist/css/demo.min.css?1684106062" rel="stylesheet" />
    {{-- end Bootstrap --}}



    {{-- Font Awesome --}}
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">
    {{-- end Font Awesome --}}


    {{-- DataTables --}}
    <link rel="stylesheet" href="assets/DataTables/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js">
    <link rel="stylesheet" href="../assets/DataTables/dataTables.bootstrap5.min.css">
    <script src="assets/DataTables/jquery.dataTables.min.js"></script>
    <script src="../assets/DataTables/jquery.dataTables.min.js"></script>
    <script src="assets/DataTables/dataTables.bootstrap5.min.js"></script>
    <script src="../assets/DataTables/dataTables.bootstrap5.min.js"></script>
    {{-- <link href="assets/DataTables/DataTables-1.13.6/css/jquery.dataTables.css" rel="stylesheet">
    <link href="../assets/DataTables/DataTables-1.13.6/css/jquery.dataTables.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" /> --}}
    {{-- end DataTables --}}

    {{-- Style --}}
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="../assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/profile.css">
    <link rel="stylesheet" href="assets/css/ruangan.css">
    {{-- end Style --}}


    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        @font-face {
            font-family: 'Inter';
            src:
                url('/assets/fonts/Inter-Medium.ttf') format('truetype'),
                url('/assets/fonts/Inter-Regular.ttf') format('truetype'),
                url('/assets/fonts/Inter-SemiBold.ttf') format('truetype'),
                url('/assets/fonts/Inter-Thin.ttf') format('truetype'),
                url('/assets/fonts/Inter-VariableFont_slnt,wght.ttf') format('truetype');
            font-weight: 900;
        }

        /* ANIMASI MASUK */
        @keyframes transitionIn {
            from {
                opacity: 0;
                /* transform: rotateX(-10deg); */
                margin-left: 20px;
            }

            to {
                opacity: 1;
                /* transform: rotateX(0); */
                margin-left: 0px;
            }

        }



        body {
            font-feature-settings: "cv03", "cv04", "cv11";
            font-family: 'Inter';
        }

        .page-content {
            animation: transitionIn 0.55s;

        }

        ::-webkit-scrollbar {
            width: 5px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #e2e3e5;
        }

        .modal-open-nested .modal-backdrop {
            display: none;
        }
    </style>

</head>

<body style="font-family: 'Inter';">

<div class="card p-4" style="font-size: 14px;">
        <table class="table table-striped" id="data-tables" style="font-size: 14px;">
            <thead>
                <tr>
                    <th>#</th>
                    <th>No. Departemen</th>
                    <th>Departemen</th>
                    <th data-searchable="false">Action</th>
                </tr>
            </thead>
           
                <tr>
                    <td>aaa</td>
                    <td>aaa</td>
                    <td>aaa</td>
                    <td>
                        <button data-bs-toggle="modal" data-bs-target="#editdata"
                            style="margin-right: 10px" class="btn btn-warning mr-2"><i class="fa fa-edit"></i></button>
                        <button data-bs-toggle="modal" data-bs-target="#deletedata"
                            class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                        </button>

                    </td>
                </tr>
         
        </table>
    </div>



    {{-- JQuery --}}
    <script src="assets/jquery/jquery-3.7.1.min.js"></script>
    <script src="../assets/jquery/jquery-3.7.1.min.js"></script>
    <script src="assets/jquery/jquery-3.7.0.js"></script>
    <script src="../assets/jquery/jquery-3.7.0.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"
        integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/js/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous"></script>
    {{-- <script src="assets/js/jquery-3.7.1.min.js"></script> --}}
    {{-- end JQuery --}}

    {{-- DataTables --}}
    <script src="assets/DataTables/jquery.dataTables.min.js"></script>
    <script src="../assets/DataTables/jquery.dataTables.min.js"></script>
    <script src="assets/DataTables/dataTables.bootstrap5.min.js"></script>
    <script src="../assets/DataTables/dataTables.bootstrap5.min.js"></script>
    {{-- <script src="assets/DataTables/DataTables-1.13.6/js/jquery.dataTables.js"></script>
    <script src="../assets/DataTables/DataTables-1.13.6/js/jquery.dataTables.js"></script> --}}
    {{-- end DataTables --}}
    <script>
        $(document).ready(function() {
            $("#harga").keyup(function() {
                $(this).maskNumber({
                    integer: true,
                    thousands: "."
                })
            })
        });

        $(document).ready(function() {
            $('#data-tables').DataTable();
        });

        $(document).ready(function() {
            if ($(".alert-success").length > 0) {
                setTimeout(function() {
                    $(".alert-success").fadeOut(
                        500); // Ubah nilai 500 dengan durasi fade out yang diinginkan (dalam milidetik)
                }, 3000); // Ubah nilai 3000 dengan waktu tunda sebelum fade out (dalam milidetik)
            }
        });
        $(document).ready(function() {
            if ($(".alert-warning").length > 0) {
                setTimeout(function() {
                    $(".alert-warning").fadeOut(
                        500); // Ubah nilai 500 dengan durasi fade out yang diinginkan (dalam milidetik)
                }, 3000); // Ubah nilai 3000 dengan waktu tunda sebelum fade out (dalam milidetik)
            }
        });
    </script>


</body>

</html>
