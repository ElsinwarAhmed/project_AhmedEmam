@extends('layout')

@section('content')

<section class="edit-org text-center">
    <div class="container">
                <form role="form">

                        <div class="form-group input-group input-group-lg">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input class="form-control" type="text">
                    </div>
                        <div class="form-group input-group input-group-lg">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input class="form-control" type="text">
                    </div>
                        <div class="form-group input-group input-group-lg">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input class="form-control" type="text">
                    </div>
                        <div class="form-group input-group input-group-lg">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <select class="form-control">
                            <option value="">جهة داخلية</option>
                            <option value="">جهة خارجية</option>
                        </select>
                    </div>
                        <button class="btn btn-success btn-lg"><i class="fa fa-edit"></i> تعديل </button>
                        <button class="btn btn-danger btn-lg"><i class="fa fa-trash"></i> الغاء </button>

                </form>

    </div>
</section>

@endsection

@section('nameAddress', 'تعديل جهة ')
