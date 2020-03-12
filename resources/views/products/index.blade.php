@extends('layouts.main')

@section('content')
    <br>
    <h1 class="badge badge-primary my-badge" style="font-size:25px"> All Products</h1>
    <hr id="line-home">
    @if (count($products) > 1)
        @foreach ($products as $product)
        <div class="container">
            <br>
            <div class="row" id="ads">
            <!-- Category Card -->
            <div class="col-md-4">
                <div class="card rounded">
                    <div class="card-image">
                        <span class="card-notify-badge">On sales</span>
                        <span class="card-notify-year">2018</span>
                        <img class="img-fluid" src="https://imageonthefly.autodatadirect.com/images/?USER=eDealer&PW=edealer872&IMG=USC80HOC011A021001.jpg&width=440&height=262" alt="Alternate Text" />
                    </div>
                    <div class="card-image-overlay m-auto">
                        <span class="card-detail-badge">$28,000.00</span>
                        <span class="card-detail-badge-name">Accord LX</span>
                    </div>
                    {{-- <div class="card-body text-center">
                        <div class="ad-title m-auto">
                            <h5>Honda </h5>
                        </div>
                        <a class="ad-btn" href="#">View</a>
                    </div> --}}
                </div>
            </div>
            {{-- <div class="col-md-4">
                <div class="card rounded">
                    <div class="card-image">
                        <span class="card-notify-badge">Fully-Loaded</span>
                        <span class="card-notify-year">2017</span>
                        <img class="img-fluid" src="https://imageonthefly.autodatadirect.com/images/?USER=eDealer&PW=edealer872&IMG=CAC80HOC021B121001.jpg&width=440&height=262" alt="Alternate Text" />
                    </div>
                    <div class="card-image-overlay m-auto">
                        <span class="card-detail-badge">On sales</span>
                        <span class="card-detail-badge">$28,000.00</span>
                    </div>
                    <div class="card-body text-center">
                        <div class="ad-title m-auto">
                            <h5>Honda CIVIC HATCHBACK LS</h5>
                        </div>
                        <a class="ad-btn" href="#">View</a>
                    </div>
                </div>
            </div>
        
            <div class="col-md-4">
                <div class="card rounded">
                    <div class="card-image">
                        <span class="card-notify-badge">Price Reduced</span>
                        <span class="card-notify-year">2018</span>
                        <img class="img-fluid" src="https://imageonthefly.autodatadirect.com/images/?USER=eDealer&PW=edealer872&IMG=USC80HOC091A021001.jpg&width=440&height=262" alt="Alternate Text" />
                    </div>
                    <div class="card-image-overlay m-auto">
                        <span class="card-detail-badge">On sales</span>
                        <span class="card-detail-badge">$22,000.00</span>
                    </div>
                    <div class="card-body text-center">
                        <div class="ad-title m-auto">
                            <h5>Honda Accord Hybrid LT</h5>
                        </div>
                        <a class="ad-btn" href="#">View</a>
                    </div>
                </div>
            </div> --}}
        
        </div>
        </div>
            
        @endforeach
    @else
        <p>No products</p>
    @endif


@endsection