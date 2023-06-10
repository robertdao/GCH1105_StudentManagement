@extends('layout.layout')
@section('title', 'index')
@section('content')
<div class="container-right">
    <div class="lable-member">
        Member Of Group
    </div>
    <div class="container-list-admin">
        
        <div class="list-admin">
            <div class="admin-top">
                <img class="admin-img" src="{{URL('images/hieu.png')}}" alt="">
            </div>
            <div class="admin-name">
                Hieu
            </div>
        </div>
        <div class="list-admin">
            <div class="admin-top">
                <img class="admin-img" src="{{URL('images/nam.jpg')}}" alt="">
            </div>
            <div class="admin-name">
                Nam
            </div>
        </div>
        <div class="list-admin">
            <div class="admin-top">
                <img class="admin-img" src="{{URL('images/hung.png')}}" alt="">
            </div>
            <div class="admin-name">
                Hung
            </div>
        </div>
    </div>
</div>    
<div class="container-about">
    <div class="title-about">
        About Us
    </div>
    <div class="wrapper-describle">
        <div class="img-about">
            <img class="quote" srcset="{{URL('images/Quote.png')}} 2x" alt="">
            <div class="about-us">
                <img class="about-us-img" src="{{URL('images/about-us.png')}}" alt="">
            </div>
        </div>
        <div class="discrible">
            Group A, consisting of Dao Van Hieu, Nguyen Thanh Nam, and Nguyen Duy Hung, is working on a student management project. Our aims are to facilitate registration and login, manage information related to students, courses, and departments, and allow easy tracking of progress for coursework and exams. We hope that you find our website useful and practical.
        </div>
    </div>
</div>
@endsection