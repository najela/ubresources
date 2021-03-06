@extends('/layouts/default')
@include('layouts/side-nav')

@section('head')
	<meta name="description" content="Easily contribute to the UBresources website">
@stop

@section('header')
   <h1>Contribute</h1>
   <p>
   Help all the users of this website by contributing to this  awesome project!<br />
   Its amazing how others can benefit from your contribution.
   </p>
@stop

@section('content')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<h2>Here's how you can help</h2>
   <h3>Web Content</h3>
   <p>You can help us by :-</p>
   <ul>
   <li>Submitting {{HTML::link('contribute/past-questions','past questions')}},  {{HTML::link('contribute/timetables','timetables')}} and {{HTML::link('contribute/course-outlines','course outlines')}} not yet present on this website.
   </li>
   <li>You can also review {{HTML::link('timetables','timetables')}}, {{HTML::link('course-outline','course outlines')}} and {{HTML::link('past-questions','past questions')}}  for {{HTML::link('contribute/errors', 'any errors')}}
   </li>
   </ul>
   <h3>Feature Request</h3>
   <p>You can suggest features not yet present but which can help make this site better by enriching its web content making it more interactive and accessible for all!<br />To submit this feature requests, send an e-mail to our development team at {{HTML::mailto('support@ubresources.com')}}</p>
   </p>
   <h3>GitHub Contribution</h3>
   <p>The entire template for this website is found on {{HTML::link('https://github.com/najela/ubresources','Github')}}. Please send a pull request if you want to submit a patch to the project</p>
   <h3>Spread the Word</h3>
   <p>Helping us gain exposure is key to our progress. You can do this by:
   <ul>
     <li>Recommending our facebook page <br/>
          <div class="fb-like" data-href="https://www.facebook.com/ubresources" data-layout="standard" data-action="recommend" data-show-faces="false" data-share="true"></div>
     </li>
     <li>Tweeting about us <br/>
          <a href="{{URL::to('/')}}" class="twitter-share-button" data-related="UBresources:Resources for students in the University of Buea" data-lang="en" data-count="horizontal" data-text="A web platform with the aim of providing resources to students in the University of Buea" data-via="UBresources">Tweet this</a>
     </li>
     <li>Giving us a +1 on google plus<br/>
        <div class="g-plusone" data-size="medium" data-href="{{URL::to('/')}}"></div>
     </li>
     <li>Or any other creative means you can think of!</li>
   </ul>
   </p>
   <h3>Help Correct Errors and Broken Links</h3>
   <p>Man is prone to errors and it is important to correct this errors. You can file such errors and broken links by emailing a report to our development team at {{HTML::mailto('support@ubresources.com')}}.
   </p>

    <script type="text/javascript">
      (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/platform.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
      })();
  </script>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
@stop