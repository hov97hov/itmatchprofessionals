$(document).ready(function () {
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

            // when done, add hash to url
            // (default click behaviour)
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
                    name: name,
                    lastName: lastName,
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

    $('#searchJob').on('submit', function (e) {
        e.preventDefault()
        var form = $(this);
        var searchValue = form.find('input[name=search_job]').val(),
            selectValue = form.find('select[name=job_select]').val();
        if (searchValue === '' || selectValue === '') {
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
                success: function(rensponse) {
                    console.log(rensponse)
                    if (rensponse) {
                        var result = `<div class="job-list-item">
                        <div class="item-type">freelance</div>
                        <div class="item-img-title">
                            <img src="/images/job-img/item-img.webp.webp" alt="">
                            <div class="title">
                                <h1>Regiemedewerker belasningen</h1>
                                <h3>Gemeente Voorschoten</h3>
                            </div>
                        </div>
                        <div class="item-info">
                            <div class="item-info-name">
                                <h3>over de opdracht</h3>
                            </div>
                            <div class="item-tarif">
                                <i class="fa-solid fa-euro-sign"></i>
                                <span>Geen max tarief</span>
                            </div>
                            <div class="item-location">
                                <i class="fa-solid fa-location-dot"></i>
                                <span>Zuid Holland</span>
                            </div>
                            <div class="item-hours">
                                <i class="fa-solid fa-clock"></i>
                                <span>12 uur p/w</span>
                            </div>
                        </div>
                    </div>`
                        $('.job-list-result').html(result)
                    }
                },
            });
        }
    })
})
var swiper = new Swiper(".mySwiper", {
    pagination: {
        el: ".swiper-pagination",
    },
    autoplay: {
        delay: 2000,
    },
});
