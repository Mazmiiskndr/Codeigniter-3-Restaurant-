const flashData = $('.flash-data').data('flashdata');

if( flashData ) {
	Swal.fire({
		'Booking berhasil ' + flashData,
		'Silahkan datang ke Restoran' + flashData,
		'success'
	});
}