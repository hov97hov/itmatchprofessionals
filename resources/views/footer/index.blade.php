<section class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-item footer-search-trending">
                <ul>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="#jobListing">Vacatures</a>
                    </li>
                    <li>
                        <a href="/contact-us">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="footer-item footer-search-trending">
                <ul>
                    @foreach($footer as $footerName)
                    <li>
                        <a href="{{route('footer-item', $footerName->id)}}">{{$footerName->title}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="footer-item footer-search-icon">
                <div class="trending-title">
                    <h3>Volg ons:</h3>
                </div>
                <ul>
                    @foreach($social as $item)
                        <li>
                            <a target="_blank" href="{{$item->url}}"><i class="fa fab {{$item->icon}}"></i></a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <p class="copyright">
            Copyright ©
            2022 All rights reserved | This template is made
            with <i class="fa-solid fa-heart"></i> by <a href="https://www.facebook.com/hovmkrtchyan97" target="_blank">Hovhannes Mkrtchyan</a>
        </p>
    </div>
</section>
