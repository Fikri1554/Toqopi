<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <title>Toqopi Coffee Shop</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="Produk/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Produk/assets/css/fontawesome.css">
    <link rel="stylesheet" href="Produk/assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="Produk/assets/css/owl.css">

  </head>
  <body>

  <header class="">
      <nav class="navbar navbar-expand-md">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>To<em>q</em>opi</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="/product">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/kontak">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    

    
    
        @yield('index')

      
        <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2022 Toqopi Coffee Shop Co.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>



   
    
    

    <!-- Bootstrap core JavaScript -->
    <script src="Produk/vendor/jquery/jquery.min.js"></script>
    <script src="Produk/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

   



    <!-- Additional Scripts -->
    <script src="Produk/assets/js/custom.js"></script>
    <script src="Produk/assets/js/owl.js"></script>
    <script src="Produk/assets/js/slick.js"></script>
    <script src="Produk/assets/js/isotope.js"></script>
    <script src="Produk/assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }

      
      
    </script>

   <script type="text/javascript">
    $('#myModal').modal('hide')

    $(document).ready(function() {
      $('.detail-btn').click(function() {
        const id = $(this).attr('data-id');
        // console.log(id);
        $.ajax({
          url: 'detailProduk/'+id,
          type: 'GET',
          data: {
            'id': id,
          },
          success:function(data) {
            console.log(data);
            $('#product-nama').html(data.nama);
            $('#product-image').html(data.image);
            $('#product-desc').html(data.desc);
          }
        }); 
      });
    });
   </script>

    <!-- Start of LiveChat (www.livechat.com) code -->
    <script>
        window.__lc = window.__lc || {};
        window.__lc.license = 14556579;
        ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
    </script>
    <noscript><a href="https://www.livechat.com/chat-with/14556579/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
    <!-- End of LiveChat code -->

  </body>

</html>
