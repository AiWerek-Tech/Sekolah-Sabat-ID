<main class="main can-be--dark-dark" role="main">
	<style type="text/css">
		.header-swath--with-image {
			background-size: 100% auto;
			background-image: url(<?= $og_image ?>);
		}

		@media (min-width: 900px) {
			.header-swath--with-image {
				background-image: url(<?= $og_image ?>);
			}
		}

		@media (min-width: 1100px) {
			.header-swath--with-image {
				background-image: url(<?= $og_image ?>);
			}
		}

		.sidebar-c .content {
			background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjEuMCIgeDI9IjAuNSIgeTI9IjAuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2Q2ZDFjMiIgc3RvcC1vcGFjaXR5PSIwLjMiLz48c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmZmZmZmYiIHN0b3Atb3BhY2l0eT0iMC40Ii8+PC9saW5lYXJHcmFkaWVudD48L2RlZnM+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmFkKSIgLz48L3N2Zz4g');
			background-size: 100%;
			background-image: -moz-linear-gradient(90deg, rgba(214, 209, 194, 0.3) 0%, rgba(255, 255, 255, 0.4) 100%);
			background-image: -webkit-linear-gradient(90deg, rgba(214, 209, 194, 0.3) 0%, rgba(255, 255, 255, 0.4) 100%);
			background-image: linear-gradient(0deg, rgba(214, 209, 194, 0.3) 0%, rgba(255, 255, 255, 0.4) 100%);
		}

		.sidebar-c h3 {
			background: rgba(223, 158, 0, 0.4);
			font: 600 1.3em/1.3em "Montserrat", sans-serif;
			margin: 0 0 20px;
			padding: 10px 7%;
		}

		.sidebar-c p {
			margin: 0;
			padding: 0 7% 20px;
			font-size: .85em;
			/* font: 600 .85em/.85em "Montserrat", sans-serif; */
		}

		.sidebar-c ul {
			margin: 0;
			padding: 0 7% 20px;
		}

		.sidebar-c li {
			border-top: 1px solid #fff;
			padding: .4em 0 .4em 20px;
		}

		.sidebar-ctop {
			display: none;
		}

		@media all and (min-width: 900px) {
			.sidebar-ctop {
				display: block;
				float: right;
				margin: 0 0 15px 20px;
				width: 40%;
			}
		}

		.sidebar-ctop .vidlink {
			background-position: center center;
			background-size: 120% auto;
			display: block;
			margin: 0 7% 20px;
			text-align: center;
			width: 86%;
			height: 120px;
		}

		.sidebar-ctop .vidlink img {
			margin: 15% auto;
			width: 25%;
		}

		@media all and (min-width: 900px) {
			.sidebar-cbottom {
				display: none;
			}
		}

		.container1 {
			display: flex;
			flex-direction: row-reverse;
			/* Mengubah arah flex menjadi dari kanan ke kiri */
		}

		.sidebar-c {
			right: 0;
			top: 0;
			width: 200px;
			height: 100%;
			font-size: .85em;

			background: url(<?= base_url('assets') ?>/image/berita_misi/waves-bg-darker.png);
			border-bottom: 1px solid #fff;
			box-shadow: inset 0 0 2px #d6d1c2;
			z-index: 100;
			/* Nilai z-index lebih tinggi */
		}

		.content1 {
			flex: 1;
			/* Gaya lainnya untuk konten */
		}

		@media (max-width: 768px) {

			/* Untuk layar dengan lebar maksimal 768px */
			.container {
				flex-direction: column;
				/* Menumpuk elemen menjadi satu kolom */
			}
		}

		/* line 260, ../sass/parts/_misc.scss */
		.author {
			border-top: 1px dashed #d6d1c2;
			color: #7E7667;
			font: 300 0.85em/1.3em "Merriweather", serif;
			overflow: hidden;
			padding: 1em 0 .5em;
		}

		/* line 266, ../sass/parts/_misc.scss */
		.author img {
			border: 1px solid #df9e00;
			float: left;
			margin: -.5em 1em .5em 0;
			width: 100px;
		}

		/* line 272, ../sass/parts/_misc.scss */
		.author strong {
			color: #565046;
			font: 800 1.2em/1em "Merriweather", serif;
		}

		/* line 506, ../sass/parts/_type.scss */
		.byline {
			padding: 50px 0 50px 100px;
		}

		/* line 508, ../sass/parts/_type.scss */
		.byline p.icon {
			background-position: center top;
			background-size: 100% auto;
			border-radius: 40px;
			float: left;
			margin: -20px 20px 0 -100px;
			width: 80px;
			height: 80px;
		}

		/* line 516, ../sass/parts/_type.scss */
		.byline strong {
			color: #438390;
			font: 600 1.2em/1.4em "Montserrat";
			display: block;
		}

		.cap {
			display: block;
			color: #df9e00;
			float: left;
			font: 400 4em/1em "Merriweather", serif;
			margin: 0 2px -7px 0;
		}
	</style>
	<header class="header__swath theme--primary-background-color header-swath--with-image blend-mode--multiply">
		<div class="layout-container cf">
			<div class="flex-container cf">
				<div class="shift-left--fluid">
					<span class="kicker white"></span>
					<h1 class="font--tertiary--xl white"><?= $judul ?></h1>
				</div>
				<div class="shift-right--fluid"></div>
			</div>
		</div>
	</header>
	<div class="layout-container full--until-large">
		<div class="flex-container cf">
			<div class="shift-left--fluid column__primary bg--white can-be--dark-light ">
				<div class="pad--primary breadcrumbs-container">
					<nav class="breadcrumbs" role="navigation">
						<ul class="breadcrumbs__list">
							<li class="breadcrumbs__list-item font--secondary--xs upper dib"><a
									href="<?= base_url('') ?>kelas/ss-dewasa">Berita Misi</a></li>
							<li class="breadcrumbs__list-item font--secondary--xs upper dib"><a
									href="<?= base_url('') ?>kelas/ss-dewasa">Dewasa</a></li>
							<li class="breadcrumbs__list-item font--secondary--xs upper dib"><a
									class="current"><?= $judul ?></a></li>
						</ul>
					</nav>
				</div>
				<div class="pad--primary spacing text page_content pad--btm">
					<h3>Sabat ke 1 - Triwulan 3 2024</h3>
					<img class="img-story" src="<?= $og_image ?>" loading="lazy" alt="Ursula Leslie">

					<div>
						<h1 class="content"><?= $judul ?></h1>
					</div>
					<div class="container1">

						<div class="sidebar-c sidebar-ctop">
							<h3>Story Tips</h3>
							<ul>
								<li>Show Dominica on the map. Then show Dominica’s capital, Roseau, where the
									Thirteenth
									Sabbath Offering will help construct an elementary school building. </li>
								<li>Watch a short YouTube video of principal Ursula Leslie: <a
										href="https://www.youtube.com/watch?v=r0OZj9nFDT4">bit.ly/Ursula-IAD</a>.
								</li>
								<li>Download photos for this story from Facebook: <a
										href="https://www.facebook.com/missionquarterlies">bit.ly/fb-mq</a>.
								</li>
								<li>Share Mission Posts and Fast Facts from the Inter-American Division: <a
										href="bit.ly/iad-2024">bit.ly/iad-2024</a>.</li>
								<p>Know that this mission story illustrates the following objectives of the
									Seventh-day
									Adventist Church’s “I Will Go” strategic plan: Spiritual Growth Objective
									No. 5, “To
									disciple individuals and families into Spirit-filled lives”; Spiritual
									Growth Objective
									No. 6, “To increase accession, retention, reclamation, and participation of
									children,
									youth, and young adults”; and Spiritual Growth Objective No. 7, “To help
									youth and young
									adults place God first and exemplify a biblical worldview.” For more
									information, go to
									the website: <a href="https://www.iwillgo.org/">IWillGo2020.org</a>.</p>
							</ul>
							<h3>Mission Record</h3>
							<ul>
								<li>In 1901, two Sabbath-keepers from Antigua took up residence in Dominica and
									raised up a
									small company of Sabbath-believers.”</li>
								<li>The presence of the Seventh-day Adventist Church is felt throughout
									Dominica. There are
									23 churches and five companies, three elementary schools (Ebenezer SDA
									Primary, Western
									District SDA Primary, and Temple SDA Primary), and two secondary schools
									(Dominica
									Seventh-day Adventist Secondary School and Arthur Walden SDA Academy).</li>
							</ul>
						</div>
						<div class="content1">
							<p>Kepada guru Sekolah Sabat: Cerita ini untuk hari Sabat, 6 Juli.
							</p><br>
							<p><span class="author">Oleh Andrew McChesney</span>
							</p><br>

							<p>
								<em>Kisah misi minggu ini menampilkan Sekolah Dasar Advent Hari Ketujuh Ebenezer di
									Roseau, ibu kota Dominika. Sekolah yang dibuka pada tahun 1976 ini secara konsisten
									berada di peringkat 10 teratas dari 62 sekolah dasar di pulau itu. Namun, gedung
									sekolah itu penuh sesak dengan 160 anak dari taman kanak-kanak hingga kelas empat.
									Beberapa blok jauhnya, 40 siswa kelas lima dan enam belajar di ruang kelas sementara
									di gedung lain. Lebih banyak orang tua ingin menyekolahkan anak-anak mereka di
									sekolah itu, tetapi tidak ada tempat. Sebagian dari Persembahan Sabat Ketiga Belas
									triwulan ini akan membantu membangun sekolah baru yang lebih besar. Ini adalah kisah
									dua siswa.</em>
							</p><br>
							<p><span class="cap">S</span><span class="cap"> </span>
							</p>

							<p>uzanne memiliki prestasi yang baik di taman kanak-kanak di
								Sekolah Dasar Gereja Masehi Advent Hari Ketujuh Ebenezer.
								Orang tuanya membawanya kem bali ke sekolah tersebut untuk
								kelas satu, kelas dua, dan kelas tiga.</p>

							<p>Tetapi ketika dia berada di kelas
								empat, ayahnya memanggil kepala sekolah. Dia tidak senang.</p>

							<p>"Saya punya masalah," katanya.</p>

							<p>Akhir pekan sebelumnya, dia meminta
								Suzanne yang berusia 9 tahun untuk mencuci piring, tetapi dia
								menolak.</p>

							<p>"Saya tidak akan mencuci piring hari ini karena hari ini
								adalah hari Sabat," katanya.</p>

							<p>Sang ayah terkejut, dan dia mengulangi permintaannya
								dengan tegas.</p>

							<p>Tetapi Suzanne menolak lagi.</p>

							<p>"Saya bisa mencuci
								piring setelah matahari terbenam," katanya.</p>

							<p>Ia menjelaskan bahwa
								di seko lah ia telah mempelajari hukum keempat, yang berbunyi,
								"Ingatlah dan kuduskanlah hari Sabat. Enam hari lamanya engkau
								akan bekerja dan melakukan segala pekerjaan mu, tetapi hari
								ketujuh adalah hari Sabat TUHAN, Allahmu. Pada hari itu janganlah
								engkau melakukan sesuatu pekerjaan, engkau, anakmu laki-laki atau
								anakmu perempuan ...." (Keluaran 20: 8–10).
								Dia melihat dirinya sebagai anak perempuan yang disebutkan
								dalam hukum Tuhan. Ia memandang tugas mencuci piring sebagai
								pekerjaan, dan ia ingin memelihara hari Sabat dengan tidak bekerja.</p>

							<p>Sang ayah tidak senang, dan dia menelepon kepala sekolah pada hari
								Senin pagi untuk menyampai kan keluhannya.</p>

							<p>"Saya tidak ingin ada
								dua agama di rumah saya," katanya kepada kepala sekolah. "Saya
								tidak me nyekolahkannya di sekolah Gereja Masehi Advent Hari
								Ketujuh untuk menjadikannya seorang Advent."</p>

							<p>Oleh karena itu, dia
								memindah kannya ke sekolah lain.</p>

							<p>Jack juga masuk ke Sekolah Dasar
								Gereja Masehi Advent Hari Ketujuh Ebenezer sebagai murid taman
								kanak-kanak. Akan tetapi, ia tiba di pertengahan tahun ajaran.</p>

							<p>Gurunya sedang mengajarkan Sepuluh Perintah Allah
								kepada anak-anak ketika Jack datang, dan perhatiannya tertuju pada
								perintah ketujuh, yang berbunyi, "Jangan berzinah" (Keluaran 20:
								14).</p>

							<p>"Ada orang yang tinggal seru mah dengan pasangannya, tetapi
								mereka belum menikah," kata sang guru. "Ini bukanlah hal yang
								benar karena Allah mengatakan bahwa keduanya harus menikah
								dan menjadi satu daging dan hidup bersama. Mereka tidak boleh tinggal bersama ketika
								mereka masih berpacaran. Mereka seharusnya menikah."</p>

							<p>Jack pulang ke rumah dan berkata, "Ibu, apakah kamu
								sudah menikah dengan ayah?"</p>

							<p>"Tidak," kata ibu.</p>

							<p>"Ibu, hidup dalam
								dosa," kata Jack. "Guru mengatakan bahwa kita tidak boleh hidup
								dalam dosa. Ibu harus menikah."</p>

							<p>Ibu terkejut. Ia tidak tahu harus
								berkata apa.
								Ia mulai berpikir tentang keputusan-keputusan yang telah ia
								buat dalam hidupnya. Kemudian ia mendapatkan sebuah ide. "Jack,"
								katanya, "kalau ayah pulang nanti, katakan padanya hal yang sama
								seperti yang kamu katakan padaku."</p>

							<p>Ketika ayah tiba di rumah, Jack
								bertanya, "Ayah, apakah kamu sudah menikah dengan ibu?"</p>

							<p>Ayah
								terkejut dan berkata, "Tidak, mengapa kamu bertanya?"</p>

							<p>"Di kelas
								hari ini, ibu guru berka ta bahwa seorang pria tidak boleh tinggal
								bersama seorang wanita jika belum menikah," kata Jack. "Ayah,
								selama ini Ayah hidup dalam dosa. Ayah harus menikah."</p>

							<p>Ayah
								memutuskan untuk berbicara dari hati ke hati dengan ibu. Tidak
								lama kemudian, akhirnya mereka menikah.</p>

							<p>Ibu kemudian menceritakan kisah itu kepada kepala sekolah.
								Dia mengatakan bahwa kata-kata Jack telah membuat pasangan itu
								menikah.</p>

							<p>Kepala sekolah, Ursula Leslie, mengatakan bahwa sekolah
								tersebut memiliki misi untuk membagikan Alkitab kepada semua
								anak. Apa yang terjadi selanjutnya adalah pekerjaan Roh Kudus.</p>

							<p>"Orang tua terkadang menentang keputusan para siswa ketika
								mereka memilih untuk mengikut Kristus sepenuhnya," katanya.
								"Itulah salah satu tantangan yang kami hadapi. Beberapa siswa
								ingin dibaptis, tetapi orang tua hanya ingin mereka belajar nilai-nilai
								yang baik dan tidak lebih dari itu."</p>

							<p>Tetapi ada juga kisah-kisah yang
								mengharukan tentang para orang tua yang menerima kebenaran
								Alkitab yang dibawa pulang oleh anak-anak mereka. Hanya kekekalan yang akan menyatakan
								hasil dari benih
								yang ditanam di dalam hati anak-anak dan orang tua mereka.</p>

							<p>Berdoalah untuk Sekolah Dasar Gereja Masehi Advent Hari Ketujuh
								Ebenezer, agar benih yang ditanam di hati anak-anak dan orang tua
								akan berbuah. Terima kasih telah merencanakan Persembahan Sabat
								Ketiga Belas yang murah hati untuk sekolah ini.
							</p>

							<div class="byline">
								<p class="icon"
									style="background-image:url(https://am.adventistmission.org/assets/public/common/authors/Andrew-McChesney.jpg)">
								</p><strong class="author">Andrew McChesney</strong>Editor, Mission Quarterly<br>
								Email: <a
									href="&#109;a&#105;&#x6c;&#x74;&#111;&#58;&#109;&#99;c&#x68;&#x65;&#115;&#110;&#101;&#x79;&#97;@&#x67;&#x63;&#x2e;&#97;&#100;&#118;&#101;&#110;&#116;&#105;s&#116;&#x2e;&#x6f;&#x72;&#x67;">m&#x63;&#x63;&#x68;e&#115;&#110;&#x65;&#x79;&#97;&#x40;&#x67;&#99;&#46;&#97;&#100;&#118;&#x65;&#110;&#x74;&#105;&#x73;&#x74;&#46;&#x6f;&#x72;&#103;</a>
								| Twitter: <a
									href="https:&#47;&#x2f;&#x74;&#x77;&#105;t&#x74;&#x65;&#x72;.&#99;o&#109;&#47;&#64;&#97;&#x72;&#109;&#x63;&#99;&#x68;&#x65;&#115;&#110;&#101;&#121;">@armcchesney</a>
							</div>
						</div>
					</div>


				</div>

				<!-- more resources -->
				<hr class style="margin: 2.5rem 0 0; More Resources">
				<div class="pad--primary spacing sublist"><span class="font--tertiary--m theme--primary-text-color">More
						Resources</span>
					<aside>
						<ul class="folders folders-gracelink">

							<li class="folder">
								<h3 class="font--secondary--m sized theme--secondary-text-color">
									<a href="<?= base_url('') ?>berita-misi/dewasa"
										style="background-image:url(<?= base_url('assets') ?>/image/icon/icon-arrow-right.svg)">
										Bacaan Berita Misi Dewasa
									</a>
								</h3>
							</li>

							<li class="folder">
								<h3 class="font--secondary--m sized theme--secondary-text-color">
									<a href="<?= base_url('') ?>berita-misi/anak-anak"
										style="background-image:url(<?= base_url('assets') ?>/image/icon/icon-arrow-right.svg)">
										Bacaan Berita Misi Anak-anak
									</a>
								</h3>
							</li>

							<li class="folder">
								<h3 class="font--secondary--m sized theme--secondary-text-color">
									<a href="<?= base_url('') ?>berita-misi/video"
										style="background-image:url(<?= base_url('assets') ?>/image/icon/icon-arrow-right.svg)">
										Video Berita Mission
									</a>
								</h3>
							</li>


						</ul>
					</aside>
				</div>
			</div>

			<!-- ASIDE BOX section -->
			<!-- Aside -->
			<?php $this->load->view($aside); ?>

		</div>

	</div>


	<div id="myModal" class="modal">
		<div class="modal-content">
			<div class="modal-header">
				<span class="close">&times;</span>
				<h3>File Tidak Tersedia</h3>
			</div>
			<div class="modal-body">
				<p>Mohon Maaf! File belum tersedia, silahkan kembali lagi nanti!</p>
			</div>
		</div>
	</div>

	<script>
		const API_KEY = 'AIzaSyC8P1chbEJmL46XJPr3DAQ-CYjlYXW6CzM';
		const PLAYLIST_ID = 'PLm5O3jZMf_3qNxPSMk5v1tGgiMv36dSPo';
		const MAX_RESULTS = 13;

		async function fetchPlaylistItems() {
			const response = await fetch(`https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=${MAX_RESULTS}&playlistId=${PLAYLIST_ID}&key=${API_KEY}`);
			const data = await response.json();
			return data.items;
		}

		function createVideoElement(video) {
			const videoElement = document.createElement('div');
			videoElement.classList.add('video');
			videoElement.innerHTML = `
				<iframe src="https://www.youtube.com/embed/${video.snippet.resourceId.videoId}" frameborder="0" allowfullscreen></iframe>
			`;
			return videoElement;
		}

		async function displayPlaylist() {
			const videoContainer = document.getElementById('video-container');
			const videos = await fetchPlaylistItems();
			videos.forEach(video => {
				const videoElement = createVideoElement(video);
				videoContainer.appendChild(videoElement);
			});
		}

		displayPlaylist();
	</script>

	<script>
		document.addEventListener('DOMContentLoaded', function () {
			// Mendapatkan semua tautan dengan kelas 'html', 'file1', dan 'presentation'
			var linkClasses = ['html', 'file', 'file1', 'presentation'];
			var links = document.querySelectorAll(linkClasses.map(cls => `a.${cls}`).join(', '));

			links.forEach(function (link) {
				link.addEventListener('click', function (event) {
					var href = link.getAttribute('href');
					// Jika href kosong, tidak valid, atau "#", tampilkan modal
					if (!href || href.trim() === "" || href === "#") {
						event.preventDefault(); // Mencegah tindakan default dari tautan
						var modal = document.getElementById("myModal");
						modal.style.display = "block";
					}
				});
			});

			// Menangani penutupan modal
			var modal = document.getElementById("myModal");
			var closeButton = document.getElementsByClassName("close")[0];

			closeButton.onclick = function () {
				modal.style.display = "none";
			}

			window.onclick = function (event) {
				if (event.target == modal) {
					modal.style.display = "none";
				}
			}
		});
	</script>


</main>