@extends('adminlte::page')

@section('title', 'Compras')

@section('content_header')


        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Compras</h3>
                <div class="card-tools">
                    <a href="{{ route('purchases.create') }}" class="btn btn-primary" type="button">Agregar</a>
                </div>
            </div>

            <div class="card-body p-0">
                <table class="table table-sm">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Proveedor</th>
                        <th>Fecha de compra</th>
                        <th>Total</th>
                        <th style="width: 20px">Estado</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($purchases as $key => $purchase)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{$purchase->provider->name}}</td>
                        <td>
                            {{$purchase->purchase_date}}
                        </td>
                        <td>
                            {{$purchase->total}}
                        </td>
                        <td>
                            {{$purchase->status}}
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>

@stop



@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
   <!-- <script> Swal.fire(
  'Bienvenido',
  'Has click en "ok" para cerrar el msj',
  'success'
) </script> -->
@stop
