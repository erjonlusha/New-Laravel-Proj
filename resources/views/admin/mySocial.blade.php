@extends('layouts.app')

@section('content')
    <div class="my_socials container">
        <h1>I Miei social</h1>
        <ul class=" d-flex flex-row flex-wrap align-content-center justify-content-around align-items-center">
            <li>
                <div class="desc">
                    <div class="d-flex justify-content-between container">
                        <h5>Facebook</h5>
                        <span class="social_logo"><i class="fab fa-facebook-square"></i></span>
                    </div>

                    <a class="qr_code" href="https://it-it.facebook.com/"><img src="{{asset('img/face.png')}}" alt="" srcset=""></a>
                </div>
            </li>
            <li>
                <div class="desc">
                    <div class="d-flex justify-content-between container">
                        <h5>Instagram</h5>
                        <span class="social_logo"><i class="fab fa-instagram-square"></i></span>
                    </div>
                    <a class="qr_code" href="https://instagram.com/erion_lusha?r=nametag"><img src="{{asset('img/instagram.jpg')}}" alt="" srcset=""></a>
                </div>
            </li>
            <li>
                <div class="desc">
                    <div class="d-flex justify-content-between container">
                        <h5>Twitter</h5>
                        <span class="social_logo"><i class="fab fa-twitter-square"></i></span>
                    </div>
                    <a class="qr_code" href="https://twitter.com/"><img src="{{asset('img/twitter.png')}}" alt="" srcset=""></a>
                </div>
            </li>
            <li>
                <div class="desc">
                    <div class="d-flex justify-content-between container">
                        <h5>GitHub</h5>
                        <span class="social_logo"><i class="fab fa-github-square"></i></span>
                    </div>
                    <a class="qr_code" href="https://github.com/erjonlusha"><img src="{{asset('img/gitHub.png')}}" alt="" srcset=""></a>
                </div>
            </li>
            <li>
                <div class="desc">
                    <div class="d-flex justify-content-between container">
                        <h5>Linkedin</h5>
                        <span class="social_logo"><i class="fab fa-linkedin"></i></span>
                    </div>
                    <a class="qr_code" href="https://www.linkedin.com/feed/"><img src="{{asset('img/linkedin.png')}}" alt="" srcset=""></a>
                </div>
            </li>
        </ul>
    </div>
@endsection
