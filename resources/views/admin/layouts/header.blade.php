<!DOCTYPE html>
<html lang="en">
<head>
    @include('client.layouts.head_for_me_google_recaptcha')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
    <link rel="stylesheet" href="{{asset('./admin/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('./admin/css/responsive_991.css')}}" media="(max-width:991px)">
    <link rel="stylesheet" href="{{asset('./admin/css/responsive_768.css')}}" media="(max-width:768px)">
    <link rel="stylesheet" href="{{asset('./admin/css/font.css')}}">
    @yield('css-links')
</head>
<body>
