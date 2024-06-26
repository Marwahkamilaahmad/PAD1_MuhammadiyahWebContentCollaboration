<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WCC</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/style-homepage.css')}}">

    <link rel="stylesheet" href="css/swiper-bundle.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">

    {{-- <!-- CKE EDITOR (Vira 31 Mei 2024) -->
    <script src="https://cdn.ckeditor.com/ckeditor5/43.0.0/classic/ckeditor.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.0/dist/quill.snow.css" rel="stylesheet" /> --}}

    <!-- Summernote Lite WYSIWYG (Erge 30 Mei 2024)-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    @yield('style')

</head>

<body>
    @include('header_footer.header')
    @yield('content')
    @include('header_footer.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
<script src="{{ asset('assets_admin/js/upload/drag-and-drop.js') }}"></script>
<script src="js/swiper-bundle.min.js"></script>


    <script>
        $(document).ready(function () {
            // Handle logout button click
            $('.dropdown-item.logout').on('click', function () {
                window.location.href = "/logout";
            });
        });
    </script>
    
    <script>
        $(document).ready(function () {
            $(".dropdown").on("click", function (event) {
                event.preventDefault();
    
                $(this).find(".dropdown-menu").toggle();
            });
        });
    </script>
    
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var dropdownToggle = document.querySelector('.kategori-lainnya');
        dropdownToggle.addEventListener('click', function () {
            var dropdownMenu = document.querySelector('.dropdown-menu');
            dropdownMenu.classList.toggle('show');
        });
    });
    </script>

    <!-- Summernote Lite -->
    <script>
        $('#editor').summernote({
        placeholder: 'Ketik disini',
        tabsize: 2,
        height: 500,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
        });
    </script>
    
    <script>
        $(document).ready(function () {
            $('#TabProfile a[data-toggle="tab"]').on('click', function (e) {
                e.preventDefault();
                
                // Remove active class and active_akun class from all tabs
                $('#TabProfile .nav-link').removeClass('active');
                
                // Add active class and active_akun class to the clicked tab
                $(this).addClass('active');
                
                // Hide all tab panes
                $('.tab-pane').removeClass('show active');
                
                // Show the tab pane associated with the clicked tab
                $($(this).attr('href')).addClass('show active');
            });
        });
    </script>

    

</body>
</html>