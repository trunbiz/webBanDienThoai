@include('backEnd.layouts.header')
<body>
@include('backEnd.modules.top-nav')
@include('backEnd.modules.left-nav')
	@yield('content')
@include('backEnd.layouts.footer')