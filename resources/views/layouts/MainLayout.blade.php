<!DOCTYPE html>
<html lang="en">
<head>
    @include('Layouts.Partials.Head')
</head>
<body>
    <div class="wrapper">
        @include('Layouts.Partials.Nav')
        @include('Layouts.Partials.Sidebar')
        <div class="content-wrapper">
            @include('Layouts.Partials.ContenWrapper')
            <section class="content">
                <div class="container-fluid">
                    @yield('Content')
                </div>
            </section>
        </div>
        @include('Layouts.Partials.Footer')
    </div>
    @include('Layouts.Partials.Scripts')
</body>
</html>