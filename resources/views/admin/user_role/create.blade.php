@extends('admin.layouts.dashboard_layout')
@section('content')
{{-- @if (session()->get('success'))
<script>
    Swal.fire(
        'Good job!',
        '{{ session()->get('success') }}',
        'success'
    )
</script>    --}}
{{-- //@endif --}}
 <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Role Create</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">class Template</a></li>
                            <li class="breadcrumb-item active">Role managment</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card">
                                <div class="card_header d-flex flex-wrap gap-3 justify-content-between p-4">
                                    <h2>Role Create</h2>
                                    <a href="" class="btn btn-outline-info"> <i class="fa fa-arrow-left">Back</i></a>
                                </div>
                                <div class="card-body">      
        
                                    <div class="form-group col-md-6 mt-6">
                                        <label>title</label>
                                        <input type="text" name="teacher" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6 mt-6">
                                        <label>Serial</label>
                                        <input type="number" name="teacher" class="form-control">
                                    </div>
        
        
                                    <div class="mt-2" >
                                        <button class="btn btn-outline-info">submit</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        
    </div> 
@endsection

