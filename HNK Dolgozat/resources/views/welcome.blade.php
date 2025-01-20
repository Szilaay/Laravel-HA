@extends('layout')
@section('content')
    <main class="container py-3 px-5">
        <section>
            <h1>Magyarország települései</h1>
           <div class="row">
                <div class="col-md">
                    <div class="card border-light mb-3">
                        <div class="card-header">Városok</div>
                        <div class="card-body">
                          <p class="card-text text-center">{{$varos}} darab</p>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card border-light mb-3">
                        <div class="card-header">Nagyközségek</div>
                        <div class="card-body">
                          <p class="card-text text-center">{{$nagykozseg}} darab</p>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card border-light mb-3">
                        <div class="card-header">Községek</div>
                        <div class="card-body">
                          <p class="card-text text-center">{{$kozseg}} darab</p>
                        </div>
                    </div>
                </div>
           </div>
            <hr>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5568565.405506455!2d14.226278024671432!3d47.03971910651742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741837bdf37e4c3%3A0xc4290c1e1010!2sMagyarorsz%C3%A1g!5e0!3m2!1shu!2shu!4v1731072814462!5m2!1shu!2shu" allowfullscreen="" loading="lazy"  referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
    </main>
@endsection
