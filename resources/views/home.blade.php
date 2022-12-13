@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header row">
                    <div class="col-md-6">
                        {{ __('Lists Of All Records') }}
                    </div>
                    <div class="col-md-6 float-right">
                        <button class="btn btn-success" href="">Add New Records</button>
                    </div>
                </div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul style="margin: 0;">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            @if(isset($all_blogs) && count($all_blogs) > 0)
                            <div class="row align-items-center mt-3 mb-0">
                                <div class="col-lg-6 col-sm-12">
                                    <p class="mb-0" style="font-size:0.7em;">Showing <?php echo $all_blogs->firstItem(); ?> to <?php echo $all_blogs->firstItem() + @$key ?> of <b><?php echo $all_blogs->total() ?></b> Records</p>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                <p class="mb-0"> {{$all_blogs->appends(request()->except('page'))->links("pagination::bootstrap-4")}} </p>
                                </div>
                            </div>
                            @endif
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
