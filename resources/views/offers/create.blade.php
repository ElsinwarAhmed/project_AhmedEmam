@extends('layout')

@section('content')

<section class="add-org">
    <div class="container">
        <div class="row">
            <div class="col-md-5">

                @if (Session::has('Success'))
                <div class="alert alert-success">
                    {{Session::get('Success')}}
                </div>
                @endif

            <form role="form" method="POST" action="{{route('store')}}">
                @csrf

                @error('name_ar')
                    <small class="form-text text-danger validate-message">{{$message}}</small>
                @enderror
                <div class="form-group input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input class="form-control" type="text" name= "name_ar" placeholder="{{__('messages.offerName_ar')}}">
                </div>

                @error('name_en')
                <small class="form-text text-danger validate-message">{{$message}}</small>
            @enderror
            <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input class="form-control" type="text" name= "name_en" placeholder="{{__('messages.offerName_en')}}">
            </div>


                @error('price')
                <small class="form-text text-danger validate-message">{{$message}}</small>
                @enderror
                <div class="form-group input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input class="form-control" type="text" name= "price" placeholder="{{__('messages.offerPrice')}}">
                </div>


                @error('details_ar')
                <small class="form-text text-danger validate-message">{{$message}}</small>
                @enderror
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input class="form-control" type="text" name= "details_ar" placeholder="{{__('messages.offerDetails_ar')}}">
                    </div>

                    @error('details_en')
                <small class="form-text text-danger validate-message">{{$message}}</small>
                @enderror
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input class="form-control" type="text" name= "details_en" placeholder="{{__('messages.offerDetails_en')}}">
                    </div>
                    <div class="btns">
                            <button type="submit" class="btn btn-warning"><i class="fa fa-pencil"></i>{{__('messages.add')}}</button>
                            <button type="reset" class="btn btn-danger"><i class="fa fa-trash"></i>{{__('messages.cancel')}}</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

@section('nameAddress', 'اضافة عرض جديدة')

