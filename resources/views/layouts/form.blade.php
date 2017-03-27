<?php
/**
 * Created by PhpStorm.
 * User: adrian
 * Date: 27.03.17
 * Time: 11:36
 */
?>
<!doctype html>
<html class="fixed">
<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Advanced Forms | Porto Admin - Responsive HTML5 Template 1.5.5</title>
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?familyTahoma:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('backend//vendor/bootstrap/css/bootstrap.css') }}" />

    <link rel="stylesheet" href="{{ asset('backend/vendor/font-awesome/css/font-awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/vendor/magnific-popup/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('backend/vendor/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/vendor/jquery-ui/jquery-ui.theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/vendor/select2/css/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('backcend/vendor/select2-bootstrap-theme/select2-bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('backcend/vendor/bootstrap-multiselect/bootstrap-multiselect.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/vendor/dropzone/basic.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/vendor/dropzone/dropzone.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/vendor/bootstrap-markdown/css/bootstrap-markdown.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/vendor/summernote/summernote.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/vendor/codemirror/lib/codemirror.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/vendor/codemirror/theme/monokai.css') }}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('backend/stylesheets/theme.css') }}" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('backend/stylesheets/skins/default.css') }}" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('backend/stylesheets/theme-custom.css') }}">

    <!-- Head Libs -->
    <script src="{{ asset('backend/vendor/modernizr/modernizr.js') }}"></script>

</head>
<body>
<section class="body">
    @include('layouts.header')

    <div class="inner-wrapper">

        @include('layouts.menu')

        @yield('content')

    </div>

</section>

<!-- Vendor -->
<script src="{{ asset('backend/vendor/jquery/jquery.js') }}"></script>
<script src="{{ asset('backend/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
<script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset('backend/vendor/nanoscroller/nanoscroller.js') }}"></script>
<script src="{{ asset('backend/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('backend/vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('backend/vendor/jquery-placeholder/jquery-placeholder.js') }}"></script>

<!-- Specific Page Vendor -->
<script src="{{ asset('backend/vendor/jquery-ui/jquery-ui.js') }}"></script>
<script src="{{ asset('backend/vendor/jqueryui-touch-punch/jqueryui-touch-punch.js') }}"></script>
<script src="{{ asset('backend/vendor/select2/js/select2.js') }}"></script>
<script src="{{ asset('backend/vendor/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>
<script src="{{ asset('backend/vendor/jquery-maskedinput/jquery.maskedinput.js') }}"></script>
<script src="{{ asset('backend/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
<script src="{{ asset('backend/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script>
<script src="{{ asset('backend//vendor/bootstrap-timepicker/bootstrap-timepicker.js') }}"></script>
<script src="{{ asset('backend/vendor/fuelux/js/spinner.js') }}"></script>
<script src="{{ asset('backend/vendor/dropzone/dropzone.js') }}"></script>
<script src="{{ asset('backend/vendor/bootstrap-markdown/js/markdown.js') }}"></script>
<script src="{{ asset('backend/vendor/bootstrap-markdown/js/to-markdown.js') }}"></script>
<script src="{{ asset('backend/vendor/bootstrap-markdown/js/bootstrap-markdown.js') }}"></script>
<script src="{{ asset('backend/vendor/codemirror/lib/codemirror.js') }}"></script>
<script src="{{ asset('backend/vendor/codemirror/addon/selection/active-line.js') }}"></script>
<script src="{{ asset('backend/vendor/codemirror/addon/edit/matchbrackets.js') }}"></script>
<script src="{{ asset('backend/vendor/codemirror/mode/javascript/javascript.js') }}"></script>
<script src="{{ asset('backend/vendor/codemirror/mode/xml/xml.js') }}"></script>
<script src="{{ asset('backend/vendor/codemirror/mode/htmlmixed/htmlmixed.js') }}"></script>
<script src="{{ asset('backend/vendor/codemirror/mode/css/css.js') }}"></script>
<script src="{{ asset('backend/vendor/summernote/summernote.js') }}"></script>
<script src="{{ asset('backend/vendor/bootstrap-maxlength/bootstrap-maxlength.js') }}"></script>
<script src="{{ asset('backend/vendor/ios7-switch/ios7-switch.js') }}"></script>
<script src="{{ asset('backend/vendor/bootstrap-confirmation/bootstrap-confirmation.js') }}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{ asset('backend/javascripts/theme.js') }}"></script>

<!-- Theme Custom -->
<script src="{{ asset('backend/javascripts/theme.custom.js') }}"></script>

<!-- Theme Initialization Files -->
<script src="{{ asset('backend/javascripts/theme.init.js') }}"></script>

<!-- Examples -->
<script src="{{ asset('backend/javascripts/forms/examples.advanced.form.js') }}"></script>

</body>
</html>
