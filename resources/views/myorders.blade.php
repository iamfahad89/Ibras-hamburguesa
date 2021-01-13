@extends('layouts.app')
@section('pagetitle', 'SOBRE NOSOTROS')


@section('content')
    <!-- First section-->
    <section class="container-bk-img-top img-bk-1 h-700x pos-relative">
        <div class="triangle-up pos-bottom"></div>
            <div class="bk-img-top-items h-100">
                <div class="display-tbl">
                        <div class="display-tbl-cell center-text color-white">
                                <h1 class="main-text">My Orders</h1>
                        </div>
                </div>
            </div>
    </section>
    <!-- Second section-->
    <section class="home-story-container left-text pos-relative">
        <div class="container">
               
                <div class="content ">
                    <table>
                        <tr>
                            <th>Item Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Order Date</th>
                        </tr>
                        @foreach($menu_items as $menu_item)
                            <tr>
                                <td>{{ $menu_item -> item_name }}</td>
                                <td>{{ $menu_item -> item_price }}</td>
                                <td>{{ $menu_item -> total_quantity }}</td>
                                <td>{{ $menu_item -> created_at }}</td>
                            </tr>
                        @endforeach
                    </table>
                    </div>                    
                
        </div>
    </section>
@endsection
