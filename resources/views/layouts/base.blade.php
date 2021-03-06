<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.min.css">
    @yield('stylesheets')
</head>
<body>
{{--<div id="root">--}}
    {{--<ul>--}}
        {{--<li v-for="skill in skills" v-text="skill"></li>--}}
    {{--</ul>--}}
{{--</div>--}}

<div id="root" class="container">

    @yield('content')

</div>


<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/vue@2.1.6/dist/vue.js"></script>

<script>
    axios.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
</script>

@yield('scripts')
{{--<script src="/js/app.js"></script>--}}
</body>
</html>
