<?php 
/* NOTES:

@yeild defines a section that will be used again elsewhere in the app
Sometimes, such as when you are not sure if a section has been defined, you may wish to pass a default value to the @yield directive. You may pass the default value as the second argument: @yield('section', 'Default Content')

@show will show whatever is in the section in the .blade.php file and override whatever is extended file
include @parent in the .blade.php file if you would like to show the parent content from the extended file

*/
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Acme</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>

    <body>
        @include('inc.navbar')
        
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-8">
                @yield('content')
            </div>
            <div class="col-md-4 col-lg-4">
                @include('inc.sidebar')
            </div>
        </div>
    </div>


    </body>
</html>
