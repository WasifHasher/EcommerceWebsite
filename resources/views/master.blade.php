<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <title>Ecommerce</title>
</head>
<body>

    {{ View::make('header')}}
    @yield('contant')
    {{ View::make('footer')}}




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function(){
        $("#btn").click(function(){
            alert('We are Goood');
        })
    })
</script>
</body>
<style>
    .custom-form{
        height:500px;
        
    }
</style>
</html>