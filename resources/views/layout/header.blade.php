<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Manajemen Buku</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Manajemen Buku</h1>
        @if (Auth::check())
        <div style="margin-bottom: 10px">
            <span>Anda login sebagai : <strong>{{ Auth::user()->name }}</strong></span>
        </div>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="tombol">Logout</button>
        </form>
        @endif
        
        
        
        <div class="nav">
            <ul>
                <li><a href="/kategori">Kategori</a></li>
                <li><a href="/penerbit">Penerbit</a></li>
                <li><a href="/buku">Buku</a></li>
            </ul>
        </div>