<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Literature | Landing Page</title>
	<meta name="author" content="name">
	<meta name="description" content="description here">
	<meta name="keywords" content="keywords,here">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
	<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
</head>

<body class="bg-white-200 font-sans leading-normal tracking-normal">
	<!--Nav-->
	<nav class="bg-gray-800 p-2 mt-0 w-full"> 
		<div class="container mx-auto flex flex-wrap items-center">
			<div class="flex w-full md:w-1/2 justify-center md:justify-start text-white font-bold">
				<a class="text-white no-underline hover:text-white hover:no-underline" href="#">
					<span class="text-2xl pl-2"><i class="fas-fa-book-open"></i>Literature</span>
				</a>
			</div>
			<div class="flex w-full pt-2 content-center justify-between md:w-1/2 md:justify-end">
                @if (Route::has('login'))
                <div class="flex w-full md:w-1/2 justify-flex-end md:justify-end text-white font-medium">
                    @auth
                        <a href="{{ url('/buku') }}" class="inline-block py-2 px-4 text-white no-underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="inline-block py-2 px-4 text-white no-underline">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="inline-block py-2 px-4 text-white no-underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
			</div>
		</div>
	</nav>

	<!--Hero-->
	<div class="container mx-auto flex flex-col md:flex-row items-center my-12 md:my-24">
		<!--Left Col-->
		<div class="flex flex-col w-full lg:w-1/2 justify-center items-start pt-12 pb-24 px-6">
			<h1 class="font-bold text-3xl my-4">Literature - Online Library</h1>
			<p class="leading-normal mb-4">Hi there! I'm glad you're interested in using the Literature - Online Library. Our library website has a lot of great resources that you can access from the comfort of your own home. If you have any questions, please don't hesitate to reach out. We're more than happy to help you get the most out of our online library.</p>
		</div>
		<!--Right Col-->
		<div class="w-full lg:w-1/2 lg:py-6 text-center">
			<!--Add your product image here-->
            <img src="{{ asset('assets/img/vector.png') }}" alt = "Rak Buku" style="width:700px;height:460px;">
		</div>
	</div>
</body>
</html>  