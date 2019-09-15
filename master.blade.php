<!DOCTYPE html>
<html>
<head>
	<tittle>Tutorial Laravel : Sistem Template</tittle>
</head>
<body>

	<header>

		<h2>Blog Azwar</h2>
		<nav>
			<a href="/blog">HOME</a>
			|
			<a href="/blog/tentang">TENTANG</a>
			|
			<a href="/blog/kontak">KONTAK</a>
		</nav>
	</header>
	<hr/>
	<br/>

	<!--Bagian Halaman-->
	<h3> @yield('judul_halaman') </h3>


	<!--bagian konten blog -->\
	@yield('konten')


	<br/>
	<br/>
	<hr/>
	<footer>
		<p>&copy; <a href="github.com/azwarhidayat">github.com/azwarhidayat</a>
	</footer>

</body>
</html>
