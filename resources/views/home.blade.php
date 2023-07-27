<style>
    .enter-50{
        height:50px;
    }
</style>
@include('layout.nav')
<br><br>
<div class="card text-bg-dark">
    <section class="d-flex align-items-center section-bg">
        <img class="card-img" src="{{ Vite::asset('resources/images/backgroundhome.jpg') }}" alt="img">
        <div class="card-img-overlay">
            <div class="container">
                <div class="row justify-content-between gy-5">
                    <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-end text-center text-lg-end"></div>
                    <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                        <h1 class="display-4 text-end text-dark">CleanCare Service</h1>
                        <h5 class="display-7 text-end text-dark">Trusted, Dependable, Recommended</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <div class="text-center">
            <h2>About Us</h2>
            <p>
                Learn More
                <span class="text-primary">About Us</span>
            </p>
        </div>
    </div>
</div>
@include('layout.footer')
