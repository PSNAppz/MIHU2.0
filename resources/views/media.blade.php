@extends('layouts.default') @section('content')
<!--Update Images with the Logos of each channels-->
<!--Buttons for Link of Channels website-->
<style>
    li{
    padding: 1em;
    text-align: center;
    font-size: 17pt;
    font-family: 'Dosis', Arial, sans-serif;  
    }
</style>
<h3 style="color:aliceblue;text-align:center"><b>Media Covering Live Telecast at Amritapuri</b></h3>
    <center>
        <div class="row">
        <div class="col-sm-4 col-md-4">
            <div class="p-3 mb-2 bg-light text-dark">
                <div class="p-3 mb-2 bg-light text-dark">
                    <img class="rounded-circle" src="{{ asset('images/asianet.png') }}" style="height:110px;width:110px">
                    <b><h3>Asianet news</h3></b><span><b>Asianet News Kochin Desk</b></span></div>
                <div class="p-3 mb-2 bg-light text-dark"><b><span class="priceContent" style="text-size:90px;color:navy"><span><h5>Crew Members</h5></span></span></b></div>
                <div class="p-3 mb-2 bg-light text-dark" style="background:azure">
                <div class="p-3 mb-2 bg-light text-dark">
                    Jaya<br/>
                    Anand<br/>
                    James<br/>      
                    Ram<br/>
                </div>
                </div>
                <b style="color:gold"><div class="btn btn-danger"><a href="https://www.asianetnews.com/" class="btn btn-block"><b>Website</b></a></div></b>
            </div>
        </div>
        <div class="col-sm-4 col-md-4">
            <div class="p-3 mb-2 bg-light text-dark">
                <div class="p-3 mb-2 bg-light text-dark">
                    <img class="rounded-circle" src="{{ asset('images/amrita.jpg') }}" style="height:110px;width:110px">
                    <b><h3>Amrita tv</h3><span>Amrita TV Trivandrum Desk</span></b></div>
                <h5><div class="p-3 mb-2 bg-light text-dark"><b><span class="priceContent" style="text-size:90px;color:navy"><span>Crew Members</span></span></b>
                </div></h5>
                <div class="p-3 mb-2 bg-light text-dark" style="background:azure">
                    <div class="p-3 mb-2 bg-light text-dark">
                        Lakshmi<br/>
                        Raji<br/>
                        Arjun<br/>
                        Jayashree<br/>
                    </div class="p-3 mb-2 bg-light text-dark">
                </div>
                <div class="btn btn-danger"><a href="https://www.amritatv.com/" class="btn btn-block"><b>Website</b></a></div>
            </div>
        </div>
        <div class="col-sm-4 col-md-4">
            <div class="p-3 mb-2 bg-light text-dark">
                <div class="p-3 mb-2 bg-light text-dark">
                    <img class="rounded-circle" src="{{ asset('images/bbc.jpg') }}" style="height:110px;width:110px">
                    <h3>BBC</h3><span>BBC Mumbai Desk</span></div>
               <h5><div class="p-3 mb-2 bg-light text-dark"><b><span class="priceContent" style="text-size:90px;color:navy"><span>Crew Members</span></span></b>
                </div></h5>
                <div class="p-3 mb-2 bg-light text-dark">
                <div class="p-3 mb-2 bg-light text-dark" style="background:azure">
                        Vijay<br/>
                        Abhilash<br/>
                        Adin<br/>
                        Jisha<br/>
                </div>
                </div>
                <div class="btn btn-danger"><a href="www.bbc.com/" class="btn btn-block"><b>Website</b></a></div><br/>
            </div>
        </div>
    </div>
    </center>
    <!--<div class="footer-basic">
        <footer>
            <p class="copyright">Dept. CSA Amrita University Amritapuri Campus © 2018</p>
        </footer>
    </div>-->
@endsection