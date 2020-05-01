//event pada saat link di klik

$('.scroll').on('click', function (e) {


	//ambil isi href
	var tujuan = $(this).attr('href');

	//ambil elemet yangbersangkutan

	var elemenTujuan = $(tujuan);

	//pindahkan sroll
	$('html,body').animate({
		scrollTop: elemenTujuan.offset().top - 50
	}, 1000);

	e.preventDefault();

});