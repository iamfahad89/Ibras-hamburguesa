@extends('layouts.adminapp')
@section('pagetitle', 'Admin')

@section('content')
    <!-- First section-->
    <section class="side-nav-right">
        <div class="heading">
            <h2>Dashboard</h2>
        </div>
        <div class="content ">
        <table>
            <tr>
                <th>Today's Sales</th>
                <th>Today's Orders</th>
                <th>Total Orders</th>
                <th>Total Earnings</th>
                <th>Total Users</th>
            </tr>
            @foreach($menu_items as $menu_item)
                <tr>
                    <td>{{ $menu_item -> sale_today }}</td>
                    <td>{{ $menu_item -> order_today }}</td>
                    <td>{{ $menu_item -> total_quantity }}</td>
                    <td>{{ $menu_item -> total_sum }}</td>
                    <td>{{ $menu_item -> total_users }}</td>
                </tr>
            @endforeach
        </table>
        </div>
    </section>
@endsection
