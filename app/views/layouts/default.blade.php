<!DOCTYPE html>
<html>
  <head>
    	<title>{{ $title }}</title>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<!-- CSS are placed here -->
   	{{ HTML::style('/assets/css/vendor/bootstrap.min.css') }}
    	{{ HTML::style('/assets/css/vendor/rondo_fonts.min.css') }}
     	{{ HTML::style('/assets/css/ui_style.min.css') }}
	
      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	   <!--[if lt IE 9]>
	   <script src="./javascript/vendor/html5shiv.min.js"></script>
	   <script src="./javascript/vendor/respond.min.js"></script>
	   <![endif]-->
  </head>
  <body>
    <header class="navbar navbar-default navbar-fixed-top" role="navigation">
      <nav class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../">UB Resources</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <div class="col-md-12">
            <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="I want to search this site for">
              </div>
              <button type="submit" class="btn  btn-info"><span class="glyphicon glyphicon-search"></span> </button>
            </form>
            <div>
              <ul class="nav navbar-nav navbar-right" role="social">
                <li><a href="#"><span aria-hidden="true" class="icon-facebook"></span></a></li>
                <li><a href="#"><span aria-hidden="true" class="icon-twitter"></span></a></li>
              </ul>
              </div><!-- /.navbar-collapse -->
            </div>
          </div>
        </nav>
      </header>
      <!-- Docs page layout -->
      <section class="bs-header" id="content">
        <div class="container">
          <h1>Gist</h1>
          <p>Get updated with what's happening in the  <a href="http://www.ubuea.cm">university</a> wherever you are</p>
        </div>
      </section>
      <section class="container">
        <section class="row">
          <div class="col-md-3">
            <div class="list-group side-nav">
               {{ HTML:: link('gist/','<span class="badge"><span class="glyphicon glyphicon-hand-right"></span></span>Gist',array('class' =>'list-group-item active')) }}
              	{{ HTML:: link('timetables/','Timetables',array('class' =>'list-group-item')) }}
              	{{ HTML:: link('past-questions/','Past Questions',array('class' =>'list-group-item')) }}
              	{{ HTML:: link('gpa-calculator/','GPA Calculator',array('class' =>'list-group-item')) }}
              	{{ HTML:: link('course-outline/','Course Outline',array('class' =>'list-group-item')) }}
         		{{ HTML:: link('good-links/','Useful Links',array('class' =>'list-group-item')) }}
              	{{ HTML:: link('contribute/','Contribute',array('class' =>'list-group-item')) }}
              	{{ HTML:: link('support/','support',array('class' =>'list-group-item')) }}
            </div>
          </div>
          
          <div class="col-md-9">
            <div class="main-content">

               @yeild('content')
            
            </div>
          </div>
        </section>
      </section>
      
      <footer class="copyright">
        <div class="row">
            <div class="col-md-4">
              <p>&copy; {{ date('Y') }} UB Resources</p>
            </div>
            <div class="col-md-5 col-md-offset-3">
              <ul class="list-inline">
                <li>{{ HTML:: link('./contribute/error.html', 'Report Error') }}</li>
                <li>{{ HTML:: link('./contribute/about.html', 'About Us') }}</li>
                <li>{{ HTML:: link('./contribute/declaimer.html', 'Disclaimer') }}</li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
      

      <!-- Scripts are placed here -->
        {{ HTML::script('/assets/js/vendor/jquery.v1.8.3.min.js') }}
        {{ HTML::script('/assets/js/vendor/bootstrap.min.js') }}
    </body>
  </html>