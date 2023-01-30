@extends('layouts.app')

@section('content')
<main>
      <!--=============== HOME ===============-->
      <section
        class="hero"
        id="hero"
        style="
          background-repeat: no-repeat;
          background-size: cover;
          height: 100vh;
          background-image: url('https://wallpaperaccess.com/full/1431610.jpg');
        "
      >
        <div
          class="hero-content h-100 d-flex justify-content-center align-items-center flex-column"
        >
          <h1 class="text-center text-white display-4">
            DỊCH VỤ DU LỊCH 
          </h1>
          <a href="#package" class="btn btn-hero mt-5">Đặt ngay</a>
        </div>
      </section>

      <!--=============== Why us ===============-->
      <section class="container why-us text-center">
        <h2 class="section-title">Các tiện ích</h2>
        <hr width="40" class="text-center" />
        <div class="row mt-5">
          <div class="col-lg-4 mb-3">
            <div class="card pt-4 pb-3 px-2">
              <div class="why-us-content">
                <i class="bx bx-money why-us-icon mb-4"></i>
                <h4 class="mb-3">Tiết kiệm tiền</h4>
                <p>
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam fugit provident praesentium maiores voluptas magnam ad accusantium delectus repellendus aliquam qui illo possimus ducimus harum non, nulla quasi voluptates recusandae.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-3">
            <div class="card pt-4 pb-3 px-2">
              <div class="why-us-content">
                <i class="bx bxs-heart why-us-icon mb-4"></i>
                <h4 class="mb-3">An toàn</h4>
                <p>
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam fugit provident praesentium maiores voluptas magnam ad accusantium delectus repellendus aliquam qui illo possimus ducimus harum non, nulla quasi voluptates recusandae.

                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-3">
            <div class="card pt-4 pb-3 px-2">
              <div class="why-us-content">
                <i class="bx bx-timer why-us-icon mb-4"></i>
                <h4 class="mb-3">Tiết kiệm thời gian</h4>
                <p>
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam fugit provident praesentium maiores voluptas magnam ad accusantium delectus repellendus aliquam qui illo possimus ducimus harum non, nulla quasi voluptates recusandae.

                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--=============== Package ===============-->
      @foreach($categories as $category)
      <section class="container package text-center" id="package">
        <h2 class="section-title">{{ $category->title }}</h2>
        <hr width="40" class="text-center" />
        <div class="row mt-5 justify-content-center">

        @foreach($category->travel_packages as $travelPackage)
          <div class="col-lg-3" style="margin-bottom: 140px">
            <div class="card package-card">
              <a href="{{ route('detail', $travelPackage) }}" class="package-link">
                <div class="package-wrapper-img overflow-hidden">
                  <img
                    src="{{ Storage::url($travelPackage->galleries->first()->path) }}"
                    class="img-fluid"
                  />
                </div>
                <div class="package-price d-flex justify-content-center">
                  <span class="btn btn-light position-absolute package-btn">
                    IDR.{{ number_format($travelPackage->price) }}
                  </span>
                </div>
                <h5 class="btn position-absolute w-100">
                  {{ $travelPackage->name }}
                </h5>
              </a>
            </div>
          </div>
        @endforeach

        </div>
      </section>
      @endforeach

      <!-- Cars -->
      <section class="container text-center">
        <h2 class="section-title">Xe di chuyển</h2>
        <hr width="40" class="text-center"  />
        <div class="row">

        @foreach(\App\Models\Car::get() as $car)
          <div class="col-lg-3 mb-5">
            <div class="card p-3 border-0" style="border-radius: 0;text-align:left;">
              <img style="height: 200px;object-fit: contain;" src="{{ asset('storage/'.$car->image) }}" alt="">
              <h4 class="main-color fw-bold mb-4" style="font-size: 1.4rem">{{ $car->name }}</h4>
              <span class="fw-bold mb-4" >Giá: {{ $car->price }} VNĐ</span> 
              <span class="d-flex mb-3"><i class='bx bxs-gas-pump main-color fs-4 me-3 '></i> <strong>Có tài xế</strong> </span> 
              <span class="d-flex"><i class='bx bxs-time-five main-color fs-4 me-3' ></i> <strong>{{ $car->duration }} giờ</strong></span>
              <a href="#" class="btn mt-4 btn-book">Đặt ngay</a> 

            </div>
          </div>
          @endforeach

        </div>
      </section>

      <!--=============== Video ===============-->
      <section class="container text-center">
        <h2 class="section-title">Video Tour</h2>
        <hr width="40" class="text-center" />
        <div class="row mt-5">
          <div class="col-12">
            <iframe
              width="100%"
              height="500px"
              src="https://www.youtube.com/embed/yR6tVxgDWLk?controls=1"
            >
            </iframe>
          </div>
        </div>
      </section>

      <!--=============== Blog ===============-->
      <section class="container blog text-center">
        <h2 class="section-title"> Blog</h2>
        <hr width="40" class="text-center" />

        <div class="row justify-content-center mt-5">
        @foreach($posts as $post)
          <div class="col-lg-4 mb-4 blogpost">
            <a href="{{ route('posts.show', $post)  }}">
              <div class="card-post">
                <div class="card-post-img">
                  <img src="{{asset('storage/'.$post->image)}}"
                  style="height: 300px"
                    alt="{{ $post->title }}">
                </div>
                <div class="card-post-data">
                  <span>Travel</span> <small>- {{ $post->created_at->diffForHumans() }}</small>
                  <h5>{{ $post->title }}</h5>
                </div>
              </div>
            </a>
          </div>
        @endforeach
        </div>
      </section>
    </main>
@endsection
