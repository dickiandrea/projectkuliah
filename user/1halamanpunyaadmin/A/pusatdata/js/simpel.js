(function ($) {
		
	$(document).ready(function() {
		$('#tabel1').DataTable();
		$('#tabel2').DataTable();
		$('#tabel3').DataTable();	
		
		$('input[name="daterange"]').on('apply.daterangepicker', function (ev, picker) {
						
			if (picker.startDate.format('YYYY-MM-DD') === picker.endDate.format('YYYY-MM-DD')) {
					picker.endDate.add(1, 'days');
					$(this).data('daterangepicker').setEndDate(picker.endDate.format('YYYY-MM-DD'));
			}
			
		});
		
		$('input[name="tanggal"]').daterangepicker({
			locale: {
				format: 'YYYY-MM-DD'
			},
			singleDatePicker: true,
			showDropdowns: true,
			maxDate: new Date()
		});
			
		
		$("#kode_spermohonan").change(function(){

			// variabel dari nilai combo box spermohonan
			var id_spermohonan = $("#kode_spermohonan").val();
			// mengirim dan mengambil data			
			$.ajax({
				url: "cari_select.php",
				data: "kode="+id_spermohonan,
				cache: false,
				success: function(msg){
				   if(msg == ""){
					   alert("Kosong");
				   }else{
					$("#jenisanalisis").html(msg);   
				   }
				   
				}
			});    
		});
		
		$("#jenisanalisis").change(function(){

			var jenis = $("#jenisanalisis").val();			
			
			$.ajax({
				url: "cari_select.php",
				data: "pertanyaan="+jenis,
				cache: false,
				success: function(msg){
				   if(msg == ""){
					   alert("Kosong");
				   }else{
						$("#kodepertanyaan").val(jenis+"-"+msg);					
				   }
				   
				}
			}); 			
			
		});	
		
		$("#filter_permohonan").change(function(){

			var jenis = $("#filter_permohonan").val();			
			$.ajax({
				url: "cari_select.php",
				data: "filter_sp="+jenis,
				cache: false,
				success: function(msg){
				   if(msg == ""){
					   alert("Kosong");
				   }else{
						$("#filter_analisis").html(msg);   
				   }
				   
				}
			});
			$.ajax({
				url: "cari_select.php",
				data: "filter_isi_sp="+jenis,
				cache: false,
				success: function(msg){
				   if(msg == ""){
					   alert("Kosong");
				   }else{
						$("#hasilfilter").html(msg);   
				   }
				   
				}
			});
			
		});	
		
		$("#filter_analisis").change(function(){

			var jenis = $("#filter_analisis").val();			
			$.ajax({
				url: "cari_select.php",
				data: "filter_isi_analisis="+jenis,
				cache: false,
				success: function(msg){
				   if(msg == ""){
					   alert("Kosong");
				   }else{					   
						$("#hasilfilter").html(msg);   
				   }
				   
				}
			});
			
		});	
		
		
		$("#tbh-turunan").click(function(){
			var kd = $("#kodepertanyaan").val();
			var a = $("#jmlh-tbh-turunan").val();
			var jmlh = Number(a);
			
			var msg = "<div class=\"item form-group\" id=\"index"+jmlh+"\">\n<div class=\"col-md-3 col-sm-3 col-xs-12\">\n<input type=\"text\" value=\""+kd+"-"+jmlh+"\" name=\"kd-p-turunan-"+jmlh+"\" class=\"form-control col-md-2 col-xs-4\" readonly >\n</div>\n<div class=\"col-md-5 col-sm-5 col-xs-12\">\n<input type=\"text\" name=\"isi-kd-p-turunan-"+jmlh+"\" class=\"form-control col-md-7 col-xs-12\" placeholder=\"Pertanyaan turunan\" >\n</div>\n<div class=\"col-md-3 col-sm-3 col-xs-11 input-group\">\n<div class=\"input-group-addon\">\n<i class=\"fa \">Rp.</i>\n</div>\n<input type=\"number\" name=\"tarif-kd-p-turunan-"+jmlh+"\" class=\"form-control col-md-7 col-xs-12\" placeholder=\"Tarif turunan\" >\n<div class=\"input-group-addon\">.00</div>\n</div>\n</div>";
			$("#tambah-turunan").after(msg);
			jmlh = jmlh + 1;
			$("#jmlh-tbh-turunan").val(jmlh);
			
		});
		
		$("#kurang-turunan").click(function(){
			var a = $("#jmlh-tbh-turunan").val();
			var b = Number(a) - 1;
			$("#index"+b).remove();
			$("#jmlh-tbh-turunan").val(b);
		});			
		
	} );	
	
	
})(jQuery);
 