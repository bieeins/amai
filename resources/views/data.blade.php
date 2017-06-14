<!DOCTYPE html>
<html>
<head>
    <title>Laravel 5 - Implementing datatables tutorial using yajra package</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
    <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
    {{--<script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>--}}
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.3.1/css/buttons.dataTables.min.css">
    <script src="{{asset('/vendor/datatables/buttons.server-side.js')}}"></script>
    <script src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.print.min.js"></script>

</head>

<body>

<div class="container">
    <br/>
    <br/>

    <table id="data" class="table table-hover table-condensed table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>Id</th>
            <th>Id Fakultas</th>
            <th>Id Jurusan</th>
            <th>Nama Program Studi</th>
            <th>Create</th>
            <th>Update</th>
            <th>Action</th>
        </tr>
        </thead>
    </table>

</div>


<script type="text/javascript">

    $(document).ready(function () {
        Table = $('#data').DataTable({
            dom: 'Blfrtip',
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
            processing: true,
            serverSide: true,
            ajax: "{{ route('datatable.getdata') }}",
            columns: [
                {data: 'id_ProgramStudi', name: 'id_ProgramStudi'},
                {data: 'id_Fakultas', name: 'id_Fakultas'},
                {data: 'id_Jurusan', name: 'id_Jurusan'},
                {data: 'nama_ProgramStudi', name: 'nama_ProgramStudi'},
                {data: 'created_at', name: 'created_at'},
                {data: 'updated_at', name: 'updated_at'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });
    });

</script>
</body>
</html>