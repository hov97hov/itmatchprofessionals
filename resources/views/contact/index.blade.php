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
                            <h1>Contact Us</h1>
                            <p>Find your dream jobs in our powerful career website template.</p>
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
                                <input type="text" id="name" name="name">
                            </div>
                            <div>
                                <label for="lastName">Last Name</label>
                                <input type="text" id="lastName" name="last_name">
                            </div>
                        </div>
                        <div class="email">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email">
                        </div>
                        <div class="subject">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject">
                        </div>
                        <div class="message">
                            <label for="message">Message</label>
                            <textarea cols="30" rows="7" placeholder="Write your notes or questions here..." id="message" name="message"></textarea>
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
                        <p>203 Fake St. Mountain View, San Francisco, California, USA</p>
                    </div>
                    <div class="phone">
                        <h3>Phone</h3>
                        <a href="#">+1 232 3235 324</a>
                    </div>
                    <div class="email-address">
                        <h3>Email Address</h3>
                        <a href="#">youremail@domain.com</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


