@extends('layouts.main')

@section('title', '| Inventory')


@section('content')

<div class="wrap__navigation--dashboard">
    @include('admin.components.navigation')
</div>
<div class="wrap__body--dashboard">
    @include('admin.components.header')
    <div class="wrap__dashboard--inner">
        <div class="wrap__products">
        <table class="table table-striped">
        <thead>
          <tr>
            <th>Product Name</th>
            <th>Total Purchases</th>
            <th>Total Cost</th>
            <th>Purchase Price</th>
            <th>Inventory Value</th>
            <th>Total Cost</th>
            <th>Retail Price</th>
          </tr>
        </thead>
        <tbody>
        @foreach($prod as $pr)
          <tr>
            <td>{{ $pr->name }}</td>
            <td>{{ $pr->total }}</td>
            <td>{{ $pr->tut }}</td>
            <td>{{ $pr->price }}</td>
            <td>{{ number_format($pr->price * $pr->total) }}</td>
            <td>{{ number_format(($pr->price * $pr->total) + $pr->tut ) }}</td>
            <td>{{ number_format((($pr->price * $pr->total) + $pr->tut) / $pr->total * 1.25 ) }}</td>
          </tr>     
        @endforeach
      </tbody>
    </table>

        </div>
    </div>    
</div>


