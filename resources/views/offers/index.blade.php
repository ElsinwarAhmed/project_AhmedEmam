@extends('layout')

@section('content')

<section class="add-org">
    <div class="container">

        <table id="myTable" class="table table-striped">
            <thead>
                <th>#</th>
                <th>{{__('messages.offerName')}}</th>
                <th>{{__('messages.offerPrice')}}</th>
                <th>{{__('messages.offerDetails')}}</th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($offers as $offer)
                <tr class="trow">
                <td>{{$offer->id}}</td>
                    <td>{{$offer->name}}</td>
                    <td>{{$offer->price}}</td>
                    <td>{{$offer->details}}</td>
                    <td>
                        <button class="btn btn-primary"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-success"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</section>

@endsection

@section('nameAddress', 'جميع العروض')

