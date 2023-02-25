@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Payment Details</div>

                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>Payment ID</th>
                                    <td>{{ $payment->Payment_ID }}</td>
                                </tr>
                                <tr>
                                    <th>Fuel Request ID</th>
                                    <td>{{ $payment->Fuel_Request_ID }}</td>
                                </tr>
                                <tr>
                                    <th>Payment Date</th>
                                    <td>{{ $payment->Payment_Date }}</td>
                                </tr>
                                <tr>
                                    <th>Payment Time</th>
                                    <td>{{ $payment->Payment_Time }}</td>
                                </tr>
                                <tr>
                                    <th>Payment Status ID</th>
                                    <td>{{ $payment->Payment_Status_ID }}</td>
                                </tr>
                                <tr>
                                    <th>Amount</th>
                                    <td>{{ $payment->Amount }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
