$(document).ready(function () {
    getJobList()
    search()
    slider()
    $('.header .header-container header .mobile-hamburger').on('click', function () {
        $('.header .header-container header .header-mobile-menu').css({
            right: '0'
        })
    })
    $('.header .header-container header .header-mobile-menu .close').on('click', function () {
        $('.header .header-container header .header-mobile-menu').css({
            right: '-300px'
        })
    })

    $("article a[href^='#']").on('click', function(e) {
        console.log('triggered');
        // prevent default anchor click behavior
        e.preventDefault();

        // store hash
        var hash = this.hash;

        // animate
        $('html, body').animate({
            scrollTop: $(this.hash).offset().top
        }, 600, function(){
            window.location.hash = hash;
        });
    });
    //*form*//
    $('#sendForm').on('submit', function (e) {
        e.preventDefault()
        var form = $(this);
        var name = form.find('input[name=name]').val(),
            lastName = form.find('input[name=last_name]').val(),
            email = form.find('input[name=email]').val(),
            subject = form.find('input[name=subject]').val(),
            message = form.find('textarea[name=message]').val();

        if (name === '') {
            $(this).find('input[name=name]').css({
                border: '1px solid red'
            });
        } else  {
            $(this).find('input[name=name]').css({
                border: '1px solid green'
            });
        }
        if (lastName === '') {
            $(this).find('input[name=last_name]').css({
                border: '1px solid red'
            });
        } else  {
            $(this).find('input[name=last_name]').css({
                border: '1px solid green'
            });
        }
        if (email === '') {
            $(this).find('input[name=email]').css({
                border: '1px solid red'
            });
        } else  {
            $(this).find('input[name=email]').css({
                border: '1px solid green'
            });
        }
        if (subject === '') {
            $(this).find('input[name=subject]').css({
                border: '1px solid red'
            });
        } else  {
            $(this).find('input[name=subject]').css({
                border: '1px solid green'
            });
        }
        if (message === '') {
            $(this).find('textarea[name=message]').css({
                border: '1px solid red'
            });
        } else  {
            $(this).find('textarea[name=message]').css({
                border: '1px solid green'
            });
        }
        if (name === '' || lastName === '' || email === '' || subject === '' || message === '' ) {
            let errorMessage = $('.error-message');
            errorMessage.css({
                visibility: 'visible'
            })
            errorMessage.html('fill in all the fields')
            return false;
        } else {
            $('.error-message').css({
                visibility: 'hidden'
            })
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/send-form',
                type: 'POST',
                data: {
                    first_name: name,
                    last_name: lastName,
                    email: email,
                    subject: subject,
                    message: message
                },
                success: function(rensponse) {
                    if (rensponse) {
                        $('.error-message').css({
                            color: 'green',
                            visibility: 'visible'
                        }).html('The email was sent successfully');
                    }
                },
                error: function (error) {
                    $('.error-message').css({
                        visibility: 'visible'
                    }).html(error.statusText);
                }
            });
        }
    })

})

function getJobList() {
    $.get('/job-list',  // url
        function (data) {  // success callback
            if (data.data.length > 0) {
                var elem = [];
                for (let i = 0; i < data.data.length; i++) {
                    elem += ` <div class="job-list-item">
                        <div class="item-type">Frelacner</div>
                        <div class="item-img-title">
                            <img src="/images/job-img/item-img.webp.webp" alt="">
                            <div class="title">
                                <h1>${data.data[i].title}</h1>
                                <h3>${data.data[i].description}</h3>
                            </div>
                        </div>
                        <div class="item-info">
                            <div class="item-info-name">
                                <h3>over de opdracht</h3>
                            </div>
                            <div class="item-tarif">
                                <i class="fa-solid fa-euro-sign"></i>
                                <span>${data.data[i].tarief}</span>
                            </div>
                            <div class="item-location">
                                <i class="fa-solid fa-location-dot"></i>
                                <span>${data.data[i].location}</span>
                            </div>
                            <div class="item-hours">
                                <i class="fa-solid fa-clock"></i>
                                <span>${data.data[i].duration}</span>
                            </div>
                        </div>
                    </div>`
                }
                $('.job-result-page').html(elem)
            }
        });
}
function search() {
    $('#searchJob').on('submit', function (e) {
        e.preventDefault()
        var form = $(this);
        var searchValue = form.find('input[name=search_job]').val(),
            selectValue = form.find('select[name=job_select]').val();
        if (searchValue === '' || selectValue === '') {
            $('.search-result').hide()
            return false;
        } else {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/search-job',
                type: 'get',
                data: {
                    search: searchValue,
                    selectType: selectValue,
                },
                success: function(data) {
                    if (data.length > 0) {
                        $('.search-result').show()
                        $(document).on('click', '.fa-solid.fa-xmark', function () {
                            $('.search-result').hide()
                        });
                        var elem = [];
                        for (let i = 0; i < data.length; i++) {
                            elem += ` <div class="job-list-item">
                        <div class="item-type">Frelacner</div>
                        <div class="item-img-title">
                            <img src="/images/job-img/item-img.webp.webp" alt="">
                            <div class="title">
                                <h1>${data[i].title}</h1>
                                <h3>${data[i].description}</h3>
                            </div>
                        </div>
                        <div class="item-info">
                            <div class="item-info-name">
                                <h3>over de opdracht</h3>
                            </div>
                            <div class="item-tarif">
                                <i class="fa-solid fa-euro-sign"></i>
                                <span>${data[i].tarief}</span>
                            </div>
                            <div class="item-location">
                                <i class="fa-solid fa-location-dot"></i>
                                <span>${data[i].location}</span>
                            </div>
                            <div class="item-hours">
                                <i class="fa-solid fa-clock"></i>
                                <span>${data[i].duration}</span>
                            </div>
                        </div>
                    </div>`
                        }
                    } else {
                        $('.search-result').hide()
                    }
                    $('.job-list-search').html(elem)
                },
            });
        }
    })
}
function slider () {
    var swiper = new Swiper(".mySwiper", {
        pagination: {
            el: ".swiper-pagination",
        },
        autoplay: {
            delay: 2000,
        },
    });
}


