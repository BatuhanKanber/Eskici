<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <title>Eskici</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">

    <!-- Font Awesome-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">


    <!-- Libraries Stylesheet -->
    <link href="{{asset('ui/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('ui/css/style.css')}}" rel="stylesheet">

</head>

<body>
<!-- Topbar Start -->
@include("ui.shared.topbar")
<!-- Topbar End -->


<!-- Navbar Start -->
@include("ui.shared.navbar")
<!-- Navbar End -->

<!-- Content Start -->
@yield("content")
<!-- Content End -->

<!-- Footer Start -->
@include("ui.shared.footer")
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('ui/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('ui/lib/owlcarousel/owl.carousel.min.js')}}"></script>

<!-- Contact Javascript File -->
<script src="{{asset('ui/mail/jqBootstrapValidation.min.js')}}"></script>
<script src="{{asset('ui/mail/contact.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('ui/js/main.js')}}"></script>
</body>

</html>
