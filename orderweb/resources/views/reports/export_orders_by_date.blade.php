@extends('templates.base_reports')
@section('header', 'Reporte órdenes por fecha de legalización')
@section('content')
    <section id="results">
        @if (count($orders) != 0)
            <h4>Reporte de Ordenes:</h4>
            <table id="reportTableInfo">
                <thead>
                    <tr>
                        <th>Fecha de inicio</th>
                        <th>Fecha de Fin</th>
                        <th>Total de ordenes</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $start_date}}</td>
                        <td>{{ $end_date}}</td>
                        <td>{{ count($orders) }}</td>

                    </tr>
                </tbody>
            </table>
            <br><hr>
            <table id="reportTable">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Fecha legalización</th>
                        <th>Dirección</th>
                        <th>Ciudad</th>
                        <th>Causal</th>
                        <th>Observación</th>
                    </tr>
                </thead>
                 <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order['id'] }}</td>
                            <td>{{ $order['legalization_date'] }}</td>
                            <td>{{ $order['address'] }}</td>
                            <td>{{ $order['city'] }}</td>
                            <td>{{ $order->causal->description }}</td>
                            <td>@if ($order->observation)
                                {{ $order->observation->description }}
                                @endif 
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else 
            <p><strong>No existen resultados en el reporte</strong></p>
        @endif
    </section>
@endsection