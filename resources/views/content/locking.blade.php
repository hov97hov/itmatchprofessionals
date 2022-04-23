<section class="locking">
    <div class="locking-content">
        <div class="container">
            <div class="locking-items">
                <div class="locking-text">
                    @foreach($signUp as $sign)
                        <h1>{{$sign->title}}</h1>
                        <p>{{$sign->description}}</p>
                    @endforeach
                </div>
                <div class="locking-btn">
                    <a href="#">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
</section>
