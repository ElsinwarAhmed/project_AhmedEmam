@extends('layout')

@section('content')

<section class="add-org">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <form role="form">
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input class="form-control" type="text" placeholder="اسم الجهة">
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input class="form-control" type="text" placeholder=" التخصص">
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input class="form-control" type="text" placeholder="التفاصيل">
                    </div>

                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <select class="form-control">
                            <option value="">جهة داخلية</option>
                            <option value="">جهة خارجية</option>
                        </select>
                    </div>
                    <div class="btns">
                            <button class="btn btn-warning"><i class="fa fa-pencil"></i> اضافة </button>
                            <button class="btn btn-danger"><i class="fa fa-trash"></i> حذف </button>
                        </div>
                </form>
            </div>
        <div class="col-md-6 col-md-offset-1">
                <form class=" pull-right" style="width: 250px;">
                        <div class="input-group">
                            <input id="myInput" type="text" class="form-control" placeholder=" بحث " aria-describedby="basic-addon1">
                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-search"></i> </span>
                        </div>
                  </form>
                <table id="myTable" class="table table-striped">
                    <thead>
                        <th>#</th>
                        <th>اسم الجهة</th>
                        <th>نوع الجهة</th>
                        <th>التاريخ</th>
                        <th>عدد المراسلات</th>
                        <th></th>
                    </thead>
                    <tbody>
                        <tr class="trow">
                            <td>1</td>
                            <td> جامعة فلسطين</td>
                            <td>داخلي</td>
                            <td>21/8/</td>
                            <td>25</td>
                            <td>
                                <button class="btn btn-primary"><i class="fa fa-eye"></i></button>
                                <button class="btn btn-success"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>

                        <tr class="trow">
                            <td>1</td>
                            <td> جامعة فلسطين</td>
                            <td>داخلي</td>
                            <td>21/8/</td>
                            <td>25</td>
                            <td>
                                <button class="btn btn-primary"><i class="fa fa-eye"></i></button>
                                <button class="btn btn-success"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>

                        <tr class="trow">
                            <td>1</td>
                            <td> جامعة فلسطين</td>
                            <td>داخلي</td>
                            <td>21/8/</td>
                            <td>25</td>
                            <td>
                                <button class="btn btn-primary"><i class="fa fa-eye"></i></button>
                                <button class="btn btn-success"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>

                        <tr class="trow">
                            <td>1</td>
                            <td> جامعة فلسطين</td>
                            <td>داخلي</td>
                            <td>21/8/</td>
                            <td>25</td>
                            <td>
                                <button class="btn btn-primary"><i class="fa fa-eye"></i></button>
                                <button class="btn btn-success"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</section>

@endsection

@section('nameAddress', 'اضافة جهة جديدة')

