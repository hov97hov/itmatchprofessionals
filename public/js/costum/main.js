$(document).ready(function () {
    search()
    slider()
    $('.header .header-container header .header-mobile-menu .close').on('click', function () {
        $('.header .header-container header .header-mobile-menu').css({
            right: '-300px'
        })
    })
    $('.header .header-container header .mobile-hamburger').on("click", function(e) {
        e.preventDefault();
        e.stopPropagation();
        $('.header .header-container header .header-mobile-menu').css({
            right: '0'
        })
    });
    $('.header .header-container header .header-mobile-menu').click( function(e) {
        e.stopPropagation();
    });
    $('body').click( function() {
        $('.header .header-container header .header-mobile-menu').css({
            right: '-300px'
        })
        $('.search-result').hide()
    });
    $('.search-result').click( function(e) {
        e.stopPropagation();
    });
    $('.banner .banner-content .banner-content-search .search-job form .job-input input').click( function(e) {
        e.stopPropagation();
    });
    $('.banner .banner-content .banner-content-search .search-job form .job-select').click( function(e) {
        e.stopPropagation();
    });
    $("article a[href^='#']").on('click', function(e) {
        e.preventDefault();

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
        var name = form.find('input[name=first_name]').val(),
            lastName = form.find('input[name=last_name]').val(),
            email = form.find('input[name=email]').val(),
            subject = form.find('input[name=subject]').val(),
            message = form.find('textarea[name=message]').val();

        if (name === '') {
            $(this).find('input[name=first_name]').css({
                border: '1px solid #d40000'
            });
        } else  {
            $(this).find('input[name=first_name]').css({
                border: '1px solid green'
            });
        }
        if (lastName === '') {
            $(this).find('input[name=last_name]').css({
                border: '1px solid #d40000'
            });
        } else  {
            $(this).find('input[name=last_name]').css({
                border: '1px solid green'
            });
        }
        if (email === '') {
            $(this).find('input[name=email]').css({
                border: '1px solid #d40000'
            });
        } else  {
            $(this).find('input[name=email]').css({
                border: '1px solid green'
            });
        }
        if (subject === '') {
            $(this).find('input[name=subject]').css({
                border: '1px solid #d40000'
            });
        } else  {
            $(this).find('input[name=subject]').css({
                border: '1px solid green'
            });
        }
        if (message === '') {
            $(this).find('textarea[name=message]').css({
                border: '1px solid #d40000'
            });
        } else  {
            $(this).find('textarea[name=message]').css({
                border: '1px solid green'
            });
        }
        if (name === '' || lastName === '' || email === '' || subject === '' || message === '' ) {
            let errorMessage = $('.error-message');
            errorMessage.css({
                visibility: 'visible',
                color: '#d40000'
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
                        setTimeout(function () {
                            $('.error-message').hide()
                        },5000)
                            name = form.find('input[name=first_name]').css({
                                border: "1px solid #000000"
                            }).val('');
                            lastName = form.find('input[name=last_name]').css({
                                border: "1px solid #000000"
                            }).val('');
                            email = form.find('input[name=email]').css({
                                border: "1px solid #000000"
                            }).val('');
                            subject = form.find('input[name=subject]').css({
                                border: "1px solid #000000"
                            }).val('');
                            message = form.find('textarea[name=message]').css({
                                border: "1px solid #000000"
                            }).val('');
                            $('.error-message-message').hide()
                    }
                },
                error: function (error) {
                    if (error.responseJSON.errors.first_name) {
                        $('.error-message-name').css({visibility: 'visible'}).html(error.responseJSON.errors.first_name)
                        $('input[name=first_name]').css({
                            border: '1px solid #d40000'
                        });
                    } else{
                        $('.error-message-name').css({visibility: 'hidden'}).html('')
                        $('input[name=first_name]').css({
                            border: '1px solid green'
                        });
                    }
                    if (error.responseJSON.errors.last_name) {
                        $('.error-message-last-name').css({visibility: 'visible'}).html(error.responseJSON.errors.last_name)
                        $('input[name=last_name]').css({
                            border: '1px solid #d40000'
                        });
                    } else{
                        $('.error-message-last-name').css({visibility: 'hidden'}).html('')
                        $('input[name=last_name]').css({
                            border: '1px solid green'
                        });
                    }
                    if (error.responseJSON.errors.email) {
                        $('.error-message-email').css({visibility: 'visible'}).html(error.responseJSON.errors.email)
                        $('input[name=email]').css({
                            border: '1px solid #d40000'
                        });
                    } else{
                        $('.error-message-email').css({visibility: 'hidden'}).html('')
                        $('input[name=email]').css({
                            border: '1px solid green'
                        });
                    }
                    if (error.responseJSON.errors.subject) {
                        $('.error-message-subject').css({visibility: 'visible'}).html(error.responseJSON.errors.subject)
                        $('input[name=subject]').css({
                            border: '1px solid #d40000'
                        });
                    } else{
                        $('.error-message-subject').css({visibility: 'hidden'}).html('')
                        $('input[name=subject]').css({
                            border: '1px solid green'
                        });
                    }
                    if (error.responseJSON.errors.message) {
                        $('.error-message-message').css({visibility: 'visible'}).html(error.responseJSON.errors.message)
                        $('textarea[name=message]').css({
                            border: '1px solid #d40000'
                        });
                    } else{
                        $('.error-message-message').css({visibility: 'hidden'}).html('')
                        $('textarea[name=message]').css({
                            border: '1px solid green'
                        });
                        return false
                    }
                }
            });
        }
    })

})

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
                            <img src="/vacancy/${data[i].images}" alt="">
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


