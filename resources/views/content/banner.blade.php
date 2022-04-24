<section class="banner">
    <div class="banner-overley"></div>
    <div class="banner-content">
        <div class="container">
            <div class="banner-content-search">
                <div class="position-info">
                    <div class="banner-text">
                        @foreach($banner as $text)
                        <h1>{{$text->title_home_page}}</h1>
                        <p>{{$text->info_home_page}}</p>
                        @endforeach
                    </div>
                    <div class="search-job">
                        <form id="searchJob">
                            <div class="job-input">
                                <input type="text" class="form-control form-control-lg" name="search_job" placeholder="Job title, keywords...">
                            </div>
                            <div class="job-select">
                                <select class="form-control" name="job_select">
                                    <option value="0">Part Time</option>
                                    <option value="1">Full Time</option>
                                    <option value="2">Freelancer</option>
                                </select>
                            </div>
                            <div class="job-btn">
                                <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><i class="fa-solid fa-magnifying-glass"></i>Search Job</button>
                            </div>
                        </form>
                        <div class="search-result">
                            <section class="job-list">
                                <div class="job-list-content">
                                    <div class="container">
                                        <div class="job-list-items">
                                            <div class="job-list-result job-list-search">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
