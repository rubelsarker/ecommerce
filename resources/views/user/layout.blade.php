<!DOCTYPE html>
<html lang="en">
@include('user.partial._head')
<body>
@include('user.partial._header')
@yield('slider')
<section>
    <div class="container">
        <div class="row">
            @include('user.partial._sldebar')
            @yield('content')
        </div>
    </div>
</section>
@include('user.partial._footer')
@include('user.partial._javascript')
@yield('scripts')
</body>
</html>