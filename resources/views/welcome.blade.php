@extends('layouts.app')

@section('content')
<div class="container">

    @if (Session::has('success_message'))
        {{Session::get('success_message')}}
    @elseif (Session::has('fail_message'))
        {{Session::get('fail_message')}}
    @endif

    <div class="container" style="margin-top: 20px; margin-bottom: 20px;">
        <div class="row panel">
            <div class="col-md-4 bg_blur ">
            </div>
            <div class="col-md-8  col-xs-12">
               <img src="{{\Auth::user()->avatar}}" class="img-thumbnail picture hidden-xs" />
               <img src="{{\Auth::user()->avatar}}" class="img-thumbnail visible-xs picture_mob" />
               <div class="header">
                    <h1>{{\Auth::user()->name}}</h1>
                    <h4>{{'@' . \Auth::user()->username}}</h4>
                    <span>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
                    "There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain..."</span>
               </div>
            </div>
        </div>

        {{-- <div class="row nav">
            <div class="col-md-4"></div>
            <div class="col-md-8 col-xs-12" style="margin: 0px;padding: 0px;">
                <div class="col-md-4 col-xs-4 well"><i class="fa fa-weixin fa-lg"></i> 16</div>
                <div class="col-md-4 col-xs-4 well"><i class="fa fa-heart-o fa-lg"></i> 14</div>
                <div class="col-md-4 col-xs-4 well"><i class="fa fa-thumbs-o-up fa-lg"></i> 26</div>
            </div>
        </div> --}}
    </div>

    <style type="text/css">

        .well {
            margin-top:-20px;
            background-color:#007FBD;
            border:2px solid #0077B2;
            text-align:center;
            cursor:pointer;
            font-size: 25px;
            padding: 15px;
            border-radius: 0px !important;
        }

        .well:hover {
            margin-top:-20px;
            background-color:#0077B2;
            border:2px solid #0077B2;
            text-align:center;
            cursor:pointer;
            font-size: 25px;
            padding: 15px;
            border-radius: 0px !important;
            border-bottom : 2px solid rgba(97, 203, 255, 0.65);
        }

        body {
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            font-size: 14px;
            line-height: 1.42857143;
            color: #fff;
            background-color: #F1F1F1;
        }

        .bg_blur {
            background-image:url('https://source.unsplash.com/category/nature/500x500');
            height: 300px;
            background-size: cover;
        }

        .follow_btn {
            text-decoration: none;
            position: absolute;
            left: 35%;
            top: 42.5%;
            width: 35%;
            height: 15%;
            background-color: #007FBE;
            padding: 10px;
            padding-top: 6px;
            color: #fff;
            text-align: center;
            font-size: 20px;
            border: 4px solid #007FBE;
        }

        .follow_btn:hover {
            text-decoration: none;
            position: absolute;
            left: 35%;
            top: 42.5%;
            width: 35%;
            height: 15%;
            background-color: #007FBE;
            padding: 10px;
            padding-top: 6px;
            color: #fff;
            text-align: center;
            font-size: 20px;
            border: 4px solid rgba(255, 255, 255, 0.8);
        }

        .header{
            color : #808080;
            margin-left:13%;
            margin-top:70px;
        }

        .picture{
            height:150px;
            width:150px;
            position:absolute;
            top: 75px;
            left:-75px;
        }

        .picture_mob{
            position: absolute;
            width: 35%;
            left: 35%;
            bottom: 70%;
        }

        .btn-style{
            color: #fff;
            background-color: #007FBE;
            border-color: #adadad;
            width: 33.3%;
        }

        .btn-style:hover {
            color: #333;
            background-color: #3D5DE0;
            border-color: #adadad;
            width: 33.3%;

        }

        @media (max-width: 767px) {
            .header{
                text-align : center;
            }



            .nav{
                margin-top : 30px;
            }
        }
    </style>

<div class="container">
    <div class="col-md-4">I am col 4</div>
    <div class="col-md-8">I am col 8</div>
</div>

</div>
@endsection
