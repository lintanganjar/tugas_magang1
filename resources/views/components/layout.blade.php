<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- SweetAlert CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

	<!-- SweetAlert JS -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	@vite(['resources/css/app.css','resources/js/app.js'])
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@400;500;600;700&display=swap');
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}
	a {
		text-decoration: none;
	}
	li {
		list-style: none;
	}
	:root {
		--poppins: 'Poppins', sans-serif;
		--lato: 'Lato', sans-serif;
		--light: #F9F9F9;
		--blue: #4b49ac;
		--light-blue: #CFE8FF;
		--grey: #edf0fc;
		--dark: #342E37;
		--red: #DB504A;
	}
	html {
		overflow-x: hidden;
	}
	/* SIDEBAR */
	#sidebar {
		z-index: 2000;
		font-family: var(--lato);
		transition: .3s ease;
	}
	#sidebar::--webkit-scrollbar {
		display: none;
	}
	#sidebar.hide {
		width: 60px;
	}
	
	#sidebar .side-menu li.active {
		background: var(--grey);
		position: relative;
		font-weight: 700;
	}
	#sidebar .side-menu li.active::before {
		content: '';
		position: absolute;
		width: 40px;
		height: 40px;
		border-radius: 50%;
		top: -40px;
		right: 0;
		box-shadow: 20px 20px 0 var(--grey);
		z-index: -1;
	}
	#sidebar .side-menu li.active::after {
		content: '';
		position: absolute;
		width: 40px;
		height: 40px;
		border-radius: 50%;
		bottom: -40px;
		right: 0;
		box-shadow: 20px -20px 0 var(--grey);
		z-index: -1;
	}

	#sidebar .side-menu.top li.active a {
		color: var(--blue);
	}
	#sidebar.hide .side-menu li a {
		width: calc(48px - (4px * 2));
		transition: width .3s ease;
	}
	#sidebar .side-menu.top li a:hover {
		color: var(--blue);
	}
	#sidebar .side-menu li a .bx {
		min-width: calc(60px  - ((4px + 6px) * 2));
		display: flex;
		justify-content: center;
	}
	/* SIDEBAR */

	/* CONTENT */

	#sidebar.hide ~ #content {
		width: calc(100% - 60px);
		left: 60px;
	}

	/* NAVBAR */

	#content nav::before {
		content: '';
		position: absolute;
		width: 40px;
		height: 40px;
		bottom: -40px;
		left: 0;
		border-radius: 50%;
		box-shadow: -20px -20px 0 #ffffff;
	}
	#content nav a {
		color: var(--dark);
	}

	#content nav .nav-link {
		font-size: 16px;
		transition: .3s ease;
	}
	#content nav .nav-link:hover {
		color: var(--blue);
	}


	/* NAVBAR */

	/* MAIN */
	#content main .head-title .left h1 {
		font-weight: 600;
		color: var(--dark);
	}
	@media screen and (max-width: 768px) {
		#sidebar {
			width: 200px;
		}
		#content {
			width: calc(100% - 60px);
			left: 200px;
		}
		#content nav .nav-link {
			display: none;
		}
	}
	@media screen and (max-width: 576px) {
		#content nav form .form-input input {
			display: none;
		}
		#content nav form .form-input button {
			width: auto;
			height: auto;
			background: transparent;
			border-radius: none;
		}
		#content nav form.show .form-input input {
			display: block;
			width: 100%;
		}
		#content nav form.show .form-input button {
			width: 36px;
			height: 100%;
			border-radius: 0 36px 36px 0;
			color: var(--light);
			background: var(--red);
		}
		#content nav form.show ~ .notification,
		#content nav form.show ~ .profile {
			display: none;
		}
	}
		</style>
</head>
<body class="bg-[#edf0fc] overflow-x-hidden">

	<!-- SIDEBAR -->
	<section id="sidebar" class="fixed w-[230px] h-full bg-white ease-linear duration-300 no-scrollbar overflow-x-hidden ">
		<a href="#" class="brand text-2xl px-6 font-bold h-14 flex items-center sticky bg-white top-0 left-0 z-[500] pb-5 box-content">
			<i class='bx bg-gradient-to-br from-purple-600 to-blue-500 bg-clip-text text-transparent min-w-[60px] flex justify-center bxs-smile'></i>
			<span class="bg-gradient-to-br from-purple-700 to-blue-400 bg-clip-text text-transparent">AdminHub</span>
		</a>
		<ul class="side-menu w-full mt-7 top">
			@yield('sidebar')
			<li class="h-12 relative bg-transparent ml-1.5 p-1">
				<a href="/logout" class="logout text-[#342E37] flex items-center w-full h-full bg-light rounded-full text-red text-lg whitespace-nowrap overflow-x-hidden bg-white">
					<i class='bx bxs-log-out-circle text-red-600 min-w-[calc(60px-(4px+6px)*2)] flex justify-center' ></i>
					<span class="text font-extrabold text-red-600">Logout</span>
				</a>
			</li>
		</ul>
		
	</section>
	<!-- SIDEBAR -->

	<!-- CONTENT -->
	<section id="content" class="relative left-[230px] w-full transition-all ease-[ease] duration-300" style="width: calc(100% - 230px) ">
		<!-- NAVBAR -->
		<nav class="shadow w-[100vw] bg-white px-6 h-14 bg-light flex items-center gap-6 relative top-0 left-0 z-50 font-lato">
			<i class='bx bx-menu cursor-pointer' ></i>
			<form action="#" class="flex-grow max-w-[350px] mr-auto w-full">
				<div class="form-input  flex items-center h-9">
					<input type="search" placeholder="Search..." class="bg-gray-100 flex-grow px-4 h-full border-none  rounded-l-full outline-none text-dark">
					<button type="submit" class="search-btn   w-9 h-full flex justify-center items-center bg-gradient-to-br from-purple-600 to-blue-500 text-light border-none outline-none rounded-r-full cursor-pointer"><i class='bx bx-search text-white' ></i>
					</button>
				</div>
			</form>
			
			<a href="#" class="profile">
				<img src="img/people.png" class="w-9 h-9 object-cover rounded-full">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main id="main" class="w-[calc(100vw_-_230px)] p-[20px_24px] max-h-[calc(100vh_-_56px)] overflow-y-auto transition-all duration-300" style="font-family: 'Poppins';">
			<div class="head-title shadow-sm bg-white rounded-lg p-3">
				<div class="left">
					@yield('content')
				</div>
			
			</div>
			<div class="mt-3">
				@yield('data')
			</div>

			<div class="container flex justify-center items-stretch bg-white  w-96">
				@yield('edit')
			</div>
				
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	
    <script>
        const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

allSideMenu.forEach(item=> {
	const li = item.parentElement;

	item.addEventListener('click', function () {
		allSideMenu.forEach(i=> {
			i.parentElement.classList.remove('active');
		})
		li.classList.add('active');
	})
});

// TOGGLE SIDEBAR
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');



const searchButton = document.querySelector('#content nav form .form-input button');
const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
const searchForm = document.querySelector('#content nav form');

searchButton.addEventListener('click', function (e) {
	if(window.innerWidth < 576) {
		e.preventDefault();
		searchForm.classList.toggle('show');
		if(searchForm.classList.contains('show')) {
			searchButtonIcon.classList.replace('bx-search', 'bx-x');
		} else {
			searchButtonIcon.classList.replace('bx-x', 'bx-search');
		}
	}
})

if(window.innerWidth < 768) {
	sidebar.classList.add('hide');
} else if(window.innerWidth > 576) {
	searchButtonIcon.classList.replace('bx-x', 'bx-search');
	searchForm.classList.remove('show');
}

window.addEventListener('resize', function () {
	if(this.innerWidth > 576) {
		searchButtonIcon.classList.replace('bx-x', 'bx-search');
		searchForm.classList.remove('show');
	}
})


   
	const main = document.getElementById('main');

menuBar.addEventListener('click', function () {
    sidebar.classList.toggle('hide');
    
    // Cek apakah sidebar disembunyikan, lalu sesuaikan lebar main
    if(sidebar.classList.contains('hide')) {
        main.style.width = 'calc(100vw - 60px)';  // Sesuaikan lebar main ketika sidebar di-hide
    } else {
        main.style.width = 'calc(100vw - 230px)'; // Kembalikan lebar main saat sidebar muncul
    }
});
    </script>
	
</body>
</html>