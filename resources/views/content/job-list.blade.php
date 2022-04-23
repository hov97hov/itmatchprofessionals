<section class="job-list">
    <div class="job-list-content">
        <div class="container">
            <div class="job-list-items">
                <div id="jobListing" class="job-list-title">
                    <h1>{{$vacancies->total()}} Job Listed</h1>
                    <img src="/images/job-img/job-listing.svg" alt="">
                </div>
                <div class="job-list-result job-result-page">
                    @foreach($vacancies as $vacancy)
                        <a href="{{route('job-item',$vacancy->id)}}">
                            <div class="job-list-item">
                                <div class="item-type">
                                    @if($vacancy->work_type == 0)
                                        <span>Part Time</span>
                                    @elseif($vacancy->work_type == 1)
                                        <span>Full Time</span>
                                    @elseif($vacancy->work_type == 2)
                                        <span>Freelancer</span>
                                    @endif
                                </div>
                                <div class="item-img-title">
                                    <img src="/vacancy/{{$vacancy->images}}" alt="{{$vacancy->images}}">
                                    <div class="title">
                                        <h1>{{$vacancy->title}}</h1>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                    <div class="paginate">
                        {{ $vacancies->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
