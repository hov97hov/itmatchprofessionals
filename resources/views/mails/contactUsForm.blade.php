<h1>
    {{$data['first_name']}}
</h1>
<h1>
    {{$data['last_name']}}
</h1>
<br>
<p class="description" style="color: black!important;">{{$data['email']}}</p>
<p class="description" style="color: black!important;">{{$data['subject']}}</p>
<p class="description" style="color: black!important;">{{$data['message']}}</p>

    <p class="footer-text" style="margin-top: 40px!important; color: white!important;">© 2022 Itmatchprofessionals</p>
</div>

<style>

    .description {
        word-break: break-word;
        margin-left: 20px;
    }

    .footer-text {
        position: absolute;
        height: 18px;
        left: 20px;
        right: 20px;
        top: 80px;
        color: white;
        font-family: Roboto;
        font-style: normal;
        font-weight: normal;
        font-size: 12px;
        line-height: 18px;
        text-align: center;
    }

</style>
