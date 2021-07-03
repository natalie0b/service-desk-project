@extends('admin.admin_master')
@section('admin')

<div class="row">
            <div class="col s12">
                <div class="container">
                    <div class="section">
                        <!--card stats start-->
                        <div id="ecommerce-offer">
                                <div class="row">
                                    <div class="col s12 m3">
                                        <div class="card gradient-shadow gradient-45deg-indigo-light-blue border-radius-3 animate fadeUp">
                                            <div class="card-content center">
                                                
                                                <h5 class="white-text lighten-4">1</h5>
                                                <p class="white-text lighten-4">Open Tickets</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 m3">
                                        <div class="card gradient-shadow gradient-45deg-red-pink border-radius-3 animate fadeUp">
                                            <div class="card-content center">
                                               
                                                <h5 class="white-text lighten-4">2</h5>
                                                <p class="white-text lighten-4">Closed Tickets</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 m3">
                                        <div class="card gradient-shadow gradient-45deg-amber-amber border-radius-3 animate fadeUp">
                                            <div class="card-content center">
                                            
                                                <h5 class="white-text lighten-4">5</h5>
                                                <p class="white-text lighten-4">Used Tickets</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 m3">
                                        <div class="card gradient-shadow gradient-45deg-green-teal border-radius-3 animate fadeUp">
                                            <div class="card-content center">
                                                
                                                <h5 class="white-text lighten-4">2</h5>
                                                <p class="white-text lighten-4">Available Tickets</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <!--card stats end-->

                        </div>
                        <!--end container-->
                </div>
                <div class="content-overlay"></div>
            </div>
        </div>
        @endsection