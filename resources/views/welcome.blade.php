<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="flex-center position-ref full-height" id="app">
            <header-component></header-component>
            <div v-bind:style="{fontSize: fontSizePost + 'em'}">
                <example-component
                    v-for="post in posts"
                    :key="post.stt"
                    :is-published="false"
                    :post="post"
                    v-on:enlarger-text="changeFontSize">
                </example-component>
            </div>
            <watcher-example-component></watcher-example-component>
            <conditional-component></conditional-component>
        </div>

        <script src="{{url('/js/app.js')}}"></script>
    </body>
</html>
