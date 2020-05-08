@extends('layouts.master')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            @section('title')
                <h2>ساخت پست جدید</h2>
            @endsection
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="">بازگشت</a>
        </div>
    </div>
</div>
@section('content')



    <form action="" method="POST">


        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>عنوان:</strong>
                    <input type="text" name="" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>نویسنده:</strong>
                    <textarea class="form-control" style="height:150px" name="" placeholder=""></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">ثبت</button>
            </div>
        </div>

    </form>
@endsection
