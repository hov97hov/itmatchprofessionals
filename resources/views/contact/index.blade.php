@extends('layouts')
@section('title', 'Contacts Us')

@section('banner')
    <section class="banner contact-banner">
        <div class="banner-overley"></div>
        <div class="banner-content">
            <div class="container">
                <div class="banner-content-search">
                    <div class="position-info">
                        <div class="banner-text">
                            @foreach($banner as $text)
                                <h1>{{$text->title_contact_page}}</h1>
                                <p>{{$text->info_contact_page}}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('content')
    <section class="contact-us">
        <div class="container">
            <div class="contact-us-content">
                <div class="contact-form">
                    <form action="#" id="sendForm">
                        <div class="name">
                            <div>
                                <label for="name">First Name</label>
                                <input type="text" id="name" name="first_name">
                                <span class="error-message-name"></span>
                            </div>
                            <div>
                                <label for="lastName">Last Name</label>
                                <input type="text" id="lastName" name="last_name">
                                <span class="error-message-last-name"></span>
                            </div>
                        </div>
                        <div class="email">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email">
                            <span class="error-message-email">555</span>
                        </div>
                        <div class="subject">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject">
                            <span class="error-message-subject"></span>
                        </div>
                        <div class="message">
                            <label for="message">Message</label>
                            <textarea cols="30" rows="7" placeholder="Write your notes or questions here..." id="message" name="message"></textarea>
                            <span class="error-message-message"></span>
                        </div>
                        <div class="btn">
                            <button type="submit">Send Message</button>
                            <span class="error-message"></span>
                        </div>
                    </form>
                </div>
                <div class="contact-address">
                    <div class="img">
                        <img src="/images/contacts/contacts.svg" alt="">
                    </div>
                    <div class="address">
                        <h3>Address</h3>
                        <p>{{$contactInfo->address ?? ''}}</p>
                    </div>
                    <div class="phone">
                        <h3>Phone</h3>
                        <p style="color: cornflowerblue">{{$contactInfo->phone ?? ''}}</p>
                    </div>
                    <div class="email-address">
                        <h3>Email Address</h3>
                        <p style="color: cornflowerblue">{{$contactInfo->email ?? ''}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


