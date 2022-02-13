@extends('layouts.main')

@section('title', '| Admin Panel')


@section('content')

<div class="wrap__navigation--dashboard">
    @include('admin.components.navigation')
</div>
<div class="wrap__body--dashboard">
    @include('admin.components.header')
    <div class="wrap__dashboard--inner">
        <div class="col-md-4">
            <div class="wrap__homecard">
                @include('components.purchasescard')
            </div>
        </div>
        <div class="col-md-4">
            <div class="wrap__homecard">
                @include('components.salescard')
            </div>
        </div>
        <div class="col-md-4">
            <div class="wrap__homecard">
                @include('components.analysis')
            </div>
        </div>
        <div class="clearfix"></div>
        <br>
        <div class="wrap__products col-md-12">
            @include('components.pendingcard')
        </div>
    </div>
</div>


        



