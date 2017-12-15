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
    </head>
    <style>
        .main_content {
            margin-left: 50px;
            background-color: orange;
        }
        .test_content {
            margin-left: 20px;
            background-color: blue;
        }
    </style>
    <body>
        <div class='main_content'>
            @yield('content')
        </div>

        @section('sidebar')
        <div class="sidebar">
            this is the sidebar
            @show
        </div>
    </body>
</html>
