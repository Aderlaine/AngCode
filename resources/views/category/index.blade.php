@extends('layouts.main')
@section('container')
    
<body>
    <main style="height: 90vh;margin-top: 150px">
      <div class="hero">
        <div class="btn-box">
          <button id="btn1" onclick="openHTML()">{{$categories[0]->category_name}}</button>
          <button id="btn2" onclick="openCSS()">{{$categories[1]->category_name}}</button>
          <button id="btn3" onclick="openJS()" style="margin-right: 0px">
            {{$categories[2]->category_name}}
          </button>
        </div>
        <div id="content1" class="content">
          <div class="content-left">
            <h1>Learn {{$categories[0]->category_name}}</h1>
            <p>
              {{$categories[0]->description}}
            </p>
            <a href="/categories/html" class="btn btn-info"> Watch Video</a>
          </div>
          <div class="content-right">
            <img src="img/gambar3.png" alt="" />
          </div>
        </div>
        <div id="content2" class="content">
          <div class="content-left">
            <h1>Learn {{$categories[1]->category_name}}</h1>
            <p>
                {{$categories[1]->description}}
            </p>
            <a href="/categories/css" class="btn btn-info"> Watch Video</a>
          </div>
          <div class="content-right">
            <img src="img/gambar4.png" alt="" />
          </div>
        </div>
        <div id="content3" class="content">
          <div class="content-left">
            <h1>Learn {{$categories[2]->category_name}}</h1>
            <p>
                {{$categories[2]->description}}
            </p>
            <a href="/categories/javascript" class="btn btn-info"> Watch Video</a>
          </div>
          <div class="content-right">
            <img src="img/gambar5.png" alt="" />
          </div>
        </div>
      </div>
    </main>
    <script>
      var content1 = document.getElementById("content1");
      var content2 = document.getElementById("content2");
      var content3 = document.getElementById("content3");
      var btn1 = document.getElementById("btn1");
      var btn2 = document.getElementById("btn2");
      var btn3 = document.getElementById("btn3");

      function openHTML() {
        content1.style.transform = "translateX(0)";
        content2.style.transform = "translateX(100%)";
        content3.style.transform = "translateX(100%)";
        btn1.style.color = "#00abf0";
        btn2.style.color = "#fff";
        btn3.style.color = "#fff";
      }
      function openCSS() {
        content1.style.transform = "translateX(100%)";
        content2.style.transform = "translateX(0)";
        content3.style.transform = "translateX(100%)";
        btn2.style.color = "#00abf0";
        btn2.style.color = "#00abf0";
        btn1.style.color = "#fff";
        btn3.style.color = "#fff";
      }
      function openJS() {
        content1.style.transform = "translateX(100%)";
        content2.style.transform = "translateX(100%)";
        content3.style.transform = "translateX(0)";
        btn3.style.color = "#00abf0";
        btn1.style.color = "#fff";
        btn2.style.color = "#fff";
      }
    </script>
  </body>
  @endsection