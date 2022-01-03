function formatRupiah(angka, prefix=""){
	var s="";
	angka=angka+"";
	if(angka!=""){
		var number_string = angka.replace(/[^,\d]/g, '').toString(),
		splita   		= number_string.split(',')
		sisa     		= splita[0].length % 3,
		rupiah     		= splita[0].substr(0, sisa),
		ribuan     		= splita[0].substr(sisa).match(/\d{3}/gi);
	
		// tambahkan titik jika yang di input sudah menjadi angka ribuan
		if(ribuan){
			separator = sisa ? '.' : '';
			rupiah += separator + ribuan.join('.');
		}
	
		rupiah = splita[1] != undefined ? rupiah + ',' + splita[1] : rupiah;
		s= (prefix == undefined ? rupiah : (rupiah ? '' + rupiah : ''));
	}
	return s
}
function formatRupiaha(angka, prefix=""){
	var s="";
	angka=angka+"";
	if(angka!=""){
		if(angka.indexOf(".")!=-1){
			var number_string = angka,
			split   		= number_string.split('.'),
			splita			= split[0].split(','),
			splitb			= split[1];
			sisa     		= splita[0].length % 3,
			rupiah     		= splita[0].substr(0, sisa),
			ribuan     		= splita[0].substr(sisa).match(/\d{3}/gi);
			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}
			splitb=(splitb!="00"?","+splitb:"");
			rupiah = splita[1] != undefined ? rupiah + ',' + splita[1] : rupiah;
			s= (prefix == undefined ? rupiah : (rupiah ? '' + rupiah : ''))+splitb;
		}
		else{
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			splita   		= number_string.split(',')
			sisa     		= splita[0].length % 3,
			rupiah     		= splita[0].substr(0, sisa),
			ribuan     		= splita[0].substr(sisa).match(/\d{3}/gi);
		
			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}
		
			rupiah = splita[1] != undefined ? rupiah + ',' + splita[1] : rupiah;
			s= (prefix == undefined ? rupiah : (rupiah ? '' + rupiah : ''));
		}
	}
	return s
}