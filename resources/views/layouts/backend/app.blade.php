<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>

    @include('layouts.backend.header')
    @stack('styles')
</head>

<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

    <!--**********************************
        Nav header start
    ***********************************-->
    @include('layouts.backend.navebar')

    @include('layouts.backend.sidebar')
    <!--**********************************
        Content body start
    ***********************************-->
    @if (session('error'))
        @push('scripts')
            <script>
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: 'error',
                    title: '{{ session('error') }}',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                });
            </script>
        @endpush
    @endif
    @if (session('success'))
        @push('scripts')
            <script>
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: 'success',
                    title: '{{ session('success') }}',
                    showConfirmButton: false,
                    timer: 3000, // Show for 3 seconds
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                });
            </script>
        @endpush
    @endif
    <div class="content-body">
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->


    <!--**********************************
        Footer start
    ***********************************-->
    @include('layouts.backend.footer')
    <!--**********************************
        Footer end
    ***********************************-->
</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{ asset('backend/vendor/global/global.min.js') }}"></script>
<script src="{{ asset('backend/js/quixnav-init.js') }}"></script>
<script src="{{ asset('backend/js/custom.min.js') }}"></script>


<!-- Vectormap -->
<script src="{{ asset('backend/vendor/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('backend/vendor/morris/morris.min.js') }}"></script>


<script src="{{ asset('backend/vendor/circle-progress/circle-progress.min.js') }}"></script>
<script src="{{ asset('backend/vendor/chart.js/Chart.bundle.min.js') }}"></script>

<script src="{{ asset('backend/vendor/gaugeJS/dist/gauge.min.js') }}"></script>

<!--  flot-chart js -->
<script src="{{ asset('backend/vendor/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('backend/vendor/flot/jquery.flot.resize.js') }}"></script>

<!-- Owl Carousel -->
<script src="{{ asset('backend/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>

<!-- Counter Up -->
<script src="{{ asset('backend/vendor/jqvmap/js/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('backend/vendor/jqvmap/js/jquery.vmap.usa.js') }}"></script>
<script src="{{ asset('backend/vendor/jquery.counterup/jquery.counterup.min.js') }}"></script>

<script src="{{ asset('backend/js/dashboard/dashboard-1.js') }}"></script>
<script src="{{ asset('/vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
<script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
<script src="{{asset('backend/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/vendor/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $('#lfm').filemanager('image');
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
    $(document).ready(function () {
        $('#description').summernote({
            placeholder: "Write short description.....",
            tabsize: 2,
            height: 150
        });
        // Swal.fire({
        //     toast: true,
        //     position: 'top-end',
        //     icon: 'success',
        //     title: 'Your data has been saved',
        //     showConfirmButton: false,
        //     timer: 3000, // Show for 3 seconds
        //     timerProgressBar: true,
        //     didOpen: (toast) => {
        //         toast.addEventListener('mouseenter', Swal.stopTimer)
        //         toast.addEventListener('mouseleave', Swal.resumeTimer)
        //     }
        // });
        // Swal.fire({
        //     toast: true,
        //     position: 'top-end',
        //     icon: 'error',
        //     title: 'Something went wrong!',
        //     showConfirmButton: false,
        //     timer: 3000,
        //     timerProgressBar: true,
        //     didOpen: (toast) => {
        //         toast.addEventListener('mouseenter', Swal.stopTimer)
        //         toast.addEventListener('mouseleave', Swal.resumeTimer)
        //     }
        // });


    });
</script>
<script>

    $('#banner-dataTable').DataTable( {
        "columnDefs":[
            {
                "orderable":false,
                "targets":[3,4,5]
            }
        ]
    } );

    // Sweet alert

    function deleteData(id){

    }
</script>
<script>
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.dltBtn').click(function(e){
            var form=$(this).closest('form');
            var dataID=$(this).data('id');
            // alert(dataID);
            e.preventDefault();
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this data!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    } else {
                        swal("Your data is safe!");
                    }
                });
        })
    })
</script>

@stack('scripts')
</body>

</html>
