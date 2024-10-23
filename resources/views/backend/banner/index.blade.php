@extends('layouts.backend.app')
@section('title','Ecommerce Laravel || Banner Page')
@section('content')
 <!-- DataTales Example -->
 <div class="card shadow mb-4">

    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary float-left">Banners List</h6>
      <a href="{{route('admin.banner.create')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add User"><i class="fas fa-plus"></i> Add Banner</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        @if(count($banners)>0)
        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Slug</th>
              <th>Photo</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($banners as $banner)
                <tr>
                    <td>{{$banner->id}}</td>
                    <td>{{$banner->title}}</td>
                    <td>{{$banner->slug}}</td>
                    <td>
                        @if($banner->photo)
                            <img src="{{$banner->photo}}" class="img-fluid zoom image-showing"  alt="{{$banner->photo}}">
                        @else
                            <img src="{{asset('backend/images/thumbnail-default.jpg')}}" class="img-fluid zoom image-showing"  alt="avatar.png">
                        @endif
                    </td>
                    <td>
                        @if($banner->status=='active')
                            <span class="badge badge-success">{{$banner->status}}</span>
                        @else
                            <span class="badge badge-warning">{{$banner->status}}</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('admin.banner.edit',$banner->slug)}}" class="btn btn-primary btn-sm float-left mr-1 datatable-button"  data-toggle="tooltip" title="edit" data-placement="bottom"><i class="fas fa-edit"></i></a>
                        <form method="POST" action="{{route('admin.banner.destroy',[$banner->slug])}}">
                          @csrf
                          @method('delete')
                              <button class="btn btn-danger btn-sm dltBtn datatable-button" data-id={{$banner->id}}  data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
          </tbody>
        </table>
        <span style="float:right">{{$banners->links()}}</span>
        @else
          <h6 class="text-center">No banners found!!! Please create banner</h6>
        @endif
      </div>
    </div>
</div>
@endsection

@push('styles')
  <link href="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <style>
      div.dataTables_wrapper div.dataTables_paginate{
          display: none;
      }
      .zoom {
        transition: transform .2s; /* Animation */
      }

      .zoom:hover {
        transform: scale(3.2);
      }
  </style>
@endpush

@push('scripts')

  <!-- Page level plugins -->
  <script src="{{asset('backend/vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('backend/js/demo/datatables-demo.js')}}"></script>
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
@endpush
