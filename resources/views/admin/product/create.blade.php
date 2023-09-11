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
    <div class="container_wraper">
    <div class="container_fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="">
                            <div class="form-group col-md-6 col-xl-4" >
                                <label for="">bangladesh</label>
                                <input type="text" name="" class="form-control">
                            </div>

                            <div class="form-group col-md-6 col-xl-4" >
                                <label for="">bangladesh</label>
                                <input type="text" name="" class="form-control">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
