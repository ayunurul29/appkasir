@extends('layouts.main')

@section('content')
    <div class="content">

        <div class="card card-primary">
            <div class="card-header">
                <h2 class="card-title">Rekap</h2>
            </div>


            <!-- Small boxes (Stat box) -->
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->

                        <div class="small-box bg-secondary">
                            <div class="inner">
                                <h3>{{ $pelanggan }}</h3>
                                <p>Jumlah pelanggans</p>
                            </div>

                            <div class="icon">
                                <i class="nav-icon fas fa-book"></i>
                            </div>
                            <a href="{{ route('pelanggans.index') }}" target="_blank" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $penjualan }}</h3>
                                <p>Jumlah penjualans</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-building"></i>
                            </div>
                            <a href="{{ route('penjualans.index') }}" target="_blank" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ $detail }}</h3>
                                <p>Jumlah details</p>
                            </div>

                            <div class="icon">
                                <i class="nav-icon fas fa-pencil-alt"></i>
                            </div>
                            <a href="{{ route('details.index') }}" target="_blank" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{ $product }}</h3>
                                <p>Jumlah products</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-list"></i>
                            </div>
                            <a href="{{ route('products.index') }}" target="_blank" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
