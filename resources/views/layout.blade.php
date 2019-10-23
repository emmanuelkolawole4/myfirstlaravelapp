<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Widget Corp</title>
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
  {{-- <link rel="stylesheet" href="css/styles.css"> --}}
  <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}" />
  
{{-- <style>
  body{
    background-color: #f4f4f4;
    color: #555;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 16px;
    line-height: 1.6em;
    margin: 0;
  }

  .containerr{
    width: 80%;
    margin: auto;
    overflow: hidden;
  }

  .minimum-height{
    min-height: 500px;
  }

  #main_header{
    background-color: coral;
    color: #fff;
  }

  #navbar{
    background-color: #333;
    color: #fff;
    text-align: right;
  }

  #navbar ul{
    padding: 0;
    list-style: none;
  }

  #navbar li{
    display: inline;
  }

  #navbar a{
    color: #fff;
    text-decoration: none;
    font-size: 18px;
    padding-right: 15px;
  }

  #showcase{
    background-image: url('..images/showcase.jpg');
    background-color: coral;
    background-position: center right;
    min-height: 300px;
    margin-bottom: 30px;
    text-align: center;
  }

  #showcase h1{
    /*color: #fff;*/
    font-size: 40px;
    line-height: 1.6em;
    padding-top: 30px;
  }

  #sidebar{
    float: right;
    width: 30%;
    background: #333;
    color: #fff;
    padding: 10px;
    box-sizing: border-box;
  }

  #main_area{
    float: left;
    width: 70%;
    padding: 0 30px;
    box-sizing: border-box;
  }


  #main_footer{
    background: #333;
    color: #fff;
    text-align: center;
    padding: 20px;
    margin-top: 40px;
  }

  @media(max-width:600px){
    #main_area{
      width: 100%;
      float: none;
    }
    #sidebar{
      width: 100%;
      float: none;
    }
  }
</style> --}}

</head>
<body>
{{-- This is a layout file. it is simply the file that all our data has in common. and we share it with all our views instead of re-writing everywhere we need it --}}

{{-- ===== Header ===== --}}

  <header id="main_header">
		<div class="containerr">
			<h1>Widget Corp</h1>
		</div>
  </header>
  
{{-- =====Header ===== --}}

{{-- ===== NavBar ===== --}}

  <nav id="navbar">
		<div class="containerr">
			<ul>
				<li><a href="/">Home</a></li>
				<li><a href="about">About Us</a></li>
				<li><a href="contact">Contact Us</a></li>
				<li><a href="customers">Customers</a></li>
			</ul>
		</div>
	</nav>

{{-- ===== NavBar ===== --}}

{{-- ===== Content ===== --}}

	<div class="containerr minimum-height">
    {{-- we need to let blade know that this space is going to be containing something(one of our child files) so it should reserve a space for it. this is done using the yield command --}}
		@yield('content')
  </div>

{{-- ===== Content ===== --}}

{{-- ===== Footer ===== --}}

  <footer id="main_footer" >
      Copyright &copy; 2019 Widget Corp
  </footer>

{{-- ===== Footer ===== --}}

	



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>