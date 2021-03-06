@extends('layouts/default')
@include('layouts/side-nav')

@section('head')
	<meta name="description" content="About Us at UBresources">
@stop
@section('header')
   <h1>About Us</h1>
   <p>Our Mission, Vision an the future plans for UB resources?</p>
@stop

@section('content')
	<h3 class="nice-header">What is UB Resources?</h3>
  	<p>UB resources is a web platform which provides News, Timetables, Past questions, GPA Calculator, and course outlines for students in the {{HTML::link('http://www.ubuea.cm','University Of Buea')}}.</p>
  	<h3 class="nice-header">How has it been realised?</h3>
  	<p>UB resources was started by  the {{HTML::link('//eliteprogrammingclub.tk', 'Elite Programming Club', array('target'=>'_blank'))}} but it is open source. The list of  all the contributors  coupled with their specific contributions to this website project can be found at {{HTML::link('https://github.com/najela/ubresources/', 'github')}}</p>
  	<p>This website is developed using the twitter {{HTML::link('http://www.getbootstrap.com','bootstrap framework')}} and {{HTML::link('//laravel.com', 'Laravel')}} and it is hosted for free by {{HTML::link('http://elevage-fees-de-celestia.fr/', 'Elevage-fees-de-celestia')}} </p>
@stop