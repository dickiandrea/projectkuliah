var allow = true;
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
		
		$("#filter_bulan").change(function(){

			var bulan = $("#filter_bulan").val();
			var spermohonan = $("#filter_laporansp").val();
			
			$.ajax({
				url: "cari_select.php",
				data: "filter_menggunakanbulan="+bulan+"&filter_laporansp="+spermohonan,
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
		
		$("#filter_laporansp").change(function(){

			var bulan = $("#filter_bulan").val();
			var spermohonan = $("#filter_laporansp").val();
			
			$.ajax({
				url: "cari_select.php",
				data: "filter_bulan="+bulan+"&filter_menggunakanlaporansp="+spermohonan,
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
		
		$("#penerima").change(function(){
			var msg = "<label class=\"control-label col-md-3 col-sm-3 col-xs-10\" for=\"isipesan\">Isi Pesan<span class=\"required\">*</span></label><div class=\"col-md-6 col-sm-5 col-xs-8\"><textarea id=\"isipesan\" class=\"form-control col-md-7 col-xs-10\" placeholder=\"Tulis Pesan\" name=\"isipesan\" required ></textarea></div>";
			$("#tambah-isipesan").html(msg);
			
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
		
		$("#mailboxsearch").keypress(function(e){

			if($(this).val().length == 0){
				cariChat();
			}else if(e.which == '15'){
				e.preventDefault();
				cariChat();
			}else if($(this).val().length >= 1){
				cariChat();
			}
		});		
		
	} );	
			
	/*
	var auto_refresh = setInterval(
	function () {
		var kode = $("#kode_refresh").val();
		if(kode != '0'){			
			$('#isichat').load(openchat(kode));
		}   
	}, 2000000); 
*/
	
})(jQuery);
 
 
function cariChat(){
	if(allow){
		allow = false;
		$("#hcari-chat").html('loading...');
		$.ajax({
			url:'cari_select.php?chat='+escape($("#mailboxsearch").val()),
			success: function (data){
				$("#hcari-chat").html(data);
				allow = true;
			}
		});
	}
}


function kirimchat(){
	var kode = $("#kode_useraktif").val();
	var a = $("#isipesan").val();
	if(a == null || a == ""){
		alert("Ulangi!");
		$("#isipesan").val('');
	}
	$.ajax({
		url:'cari_select.php',
		data: "kirimchatkode="+kode+"&kirimisichat="+a,
		cache: false,
		success: function(msg){
		   if(msg == ""){
			   alert("Kosong");
		   }else{
				openchat(kode);
				$("#isipesan").val('');
		   }		   
		}
	});
	
}

function openchat(a){
	$('ul#hcari-chat li').css('background', '#FFF');	
	$.ajax({
		url:'cari_select.php',
		data: "isichat="+a,
		cache: false,
		success: function(msg){
		   if(msg == ""){
			   alert("Kosong");
		   }else{
				$("#isichat").html(msg);
				$("#kode_refresh").val(a);
		   }		   
		}
	});
	
	$.ajax({
		url:'cari_select.php',
		data: "isimedia="+a,
		cache: false,
		success: function(m){
		   if(m == ""){
			   alert("Kosong");
		   }else{
				$("#isimedia").html(m);
				$("#kode_refresh").val(a);
		   }		   
		}
	});
}

// Ini fungsi chat untuk admin

function cariChatadmin(){
	if(allow){
		allow = false;
		$("#hcari-chat").html('loading...');
		$.ajax({
			url:'cari_select.php?chatadmin='+escape($("#mailboxsearch").val()),
			success: function (data){
				$("#hcari-chat").html(data);
				allow = true;
			}
		});
	}
}


function kirimchatadmin(){
	var penerima = $("#penerimachatadmin").val();
	var kode = $("#penerima").val();
	var pengirim = $("#pengirim").val();
	
	alert("penerima="+penerima+"pengirim="+pengirim);
	var a = $("#isipesan").val();
	if(a == null || a == ""){
		alert("Ulangi!");
		$("#isipesan").val('');
	}
	$.ajax({
		url:'cari_select.php',
		data: "penerimachatadmin="+penerima+"&kirimisichatadmin="+a+"&pengirim="+pengirim,
		cache: false,
		success: function(msg){
		   if(msg == ""){
			   alert("Kosong");
		   }else{			   
				openchatadmin(penerima);
				$("#isipesan").val('');
		   }		   
		}
	});
	
}

function openchatadmin(a){
	$('ul#hcari-chat li').css('background', '#FFF');
	var pengirim = $("#pengirim").val();
	$("#penerimachatadmin").val(a);
	//alert(a);
	//var coba = "select pengirim, penerima, isi, tanggal from chatadmin where (pengirim = '"+a+"' or pengirim = '"+pengirim+"') and (penerima = '"+a+"' or penerima ='"+pengirim+"') order by tanggal asc";
	//alert(coba);
	
	$.ajax({
		url:'cari_select.php',
		data: "isichatadmin="+a+"&pengirim="+pengirim,
		cache: false,
		success: function(msg){
		   if(msg == ""){
			   alert("Kosong");
		   }else{
				$("#isichatadmin").html(msg);
				$("#kode_refresh").val(a);
		   }		   
		}
	});
}



function resetchat(){
	var a = $("#isipesan").val('');
}


function init_echarts(){	
		
	$.ajax({
		url:'cari_select.php',
		data: "grafik",
		type:"GET",
		cache: false,
		success: function(msg){
		   if(msg == ""){
			   $('#echart_line').html("Belum Ada Permohonan Masuk Minggu Ini.");
		   }else{
				
				var hari = [];var kimia = [];var mineralogi = [];var fisika = [];var biologi = [];
				var myObj = jQuery.parseJSON(JSON.stringify(msg));
				for(var i in myObj){
					hari.push(myObj[i].hari);
					kimia.push(myObj[i].kimia);
					fisika.push(myObj[i].fisika);
					biologi.push(myObj[i].biologi);
					mineralogi.push(myObj[i].mineralogi);
				}
				
				if("undefined"!=typeof echarts){
					console.log("init_echarts");
					var a={
						color:["#26B99A","#34495E","#BDC3C7","#3498DB","#9B59B6","#8abb6f","#759c6a","#bfd3b7"],
						title:{itemGap:8,textStyle:{fontWeight:"normal",color:"#408829"}},
						dataRange:{color:["#1f610a","#97b58d"]},
						toolbox:{color:["#408829","#408829","#408829","#408829"]},
						tooltip:{backgroundColor:"rgba(0,0,0,0.5)",
							axisPointer:{
								type:"line",lineStyle:{color:"#408829",type:"dashed"},
								crossStyle:{color:"#408829"},shadowStyle:{color:"rgba(200,200,200,0.3)"}
							}
						},
						dataZoom:{dataBackgroundColor:"#eee",fillerColor:"rgba(64,136,41,0.2)",handleColor:"#408829"},
						grid:{borderWidth:0},
						categoryAxis:{axisLine:{lineStyle:{color:"#408829"}},splitLine:{lineStyle:{color:["#eee"]}}},
						valueAxis:{
							axisLine:{
								lineStyle:{color:"#408829"}
							},
						splitArea:{show:!0,areaStyle:{color:["rgba(250,250,250,0.1)","rgba(200,200,200,0.1)"]}},
						splitLine:{lineStyle:{color:["#eee"]}}},timeline:{lineStyle:{color:"#408829"},
						controlStyle:{normal:{color:"#408829"},emphasis:{color:"#408829"}}},
							k:{
								itemStyle:{
									normal:{color:"#68a54a",color0:"#a9cba2",lineStyle:{width:1,color:"#408829",color0:"#86b379"}}
								}
							},
						map:{
							itemStyle:{
							normal:{areaStyle:{color:"#ddd"},label:{textStyle:{color:"#c12e34"}}},
							emphasis:{
								areaStyle:{color:"#99d2dd"},label:{textStyle:{color:"#c12e34"}}
								}
							}
						},
						force:{itemStyle:{normal:{linkStyle:{strokeColor:"#408829"}}}},
						chord:{
							padding:4,itemStyle:{
								normal:{
									lineStyle:{width:1,color:"rgba(128, 128, 128, 0.5)"},
									chordStyle:{lineStyle:{width:1,color:"rgba(128, 128, 128, 0.5)"}}
								},
								emphasis:{
									lineStyle:{width:1,color:"rgba(128, 128, 128, 0.5)"},
									chordStyle:{lineStyle:{width:1,color:"rgba(128, 128, 128, 0.5)"}}
								}
							}
						},
						gauge:{
							startAngle:225,endAngle:-45,axisLine:{
								show:!0,lineStyle:{
									color:[[.2,"#86b379"],[.8,"#68a54a"],[1,"#408829"]],width:8}
								},
								axisTick:{splitNumber:10,length:12,lineStyle:{color:"auto"}},
								axisLabel:{textStyle:{color:"auto"}},
								splitLine:{length:18,lineStyle:{color:"auto"}},
								pointer:{length:"90%",color:"auto"},
								title:{textStyle:{color:"#333"}},
								detail:{textStyle:{color:"auto"}}
						},
						textStyle:{fontFamily:"Arial, Verdana, sans-serif"}
					};
						
					
					if($("#echart_line").length){
						var f=echarts.init(document.getElementById("echart_line"),a);
						f.setOption({
							title:{text:"Line Graph",subtext:"Subtitle"},
							tooltip:{trigger:"axis"},
							legend:{x:220,y:40,data:["Kimia","Fisika","Biologi","Mineralogi"]},
							toolbox:{
								show:!0,
								feature:{
									magicType:{
										show:!0,title:{line:"Line",bar:"Bar",stack:"Stack",tiled:"Tiled"},
										type:["line","bar","stack","tiled"]
										},
									restore:{show:!0,title:"Restore"},
									saveAsImage:{show:!0,title:"Save Image"}
								}
							},
							calculable:!0,
							xAxis:[{
								type:"category",
								boundaryGap:!1,
								data: hari
							}],
							yAxis:[{type:"value"}],
							series:[{
								name:"Kimia",
								type:"line",
								smooth:!0,
								itemStyle:{normal:{areaStyle:{type:"default"}}},
								data:kimia
							},{
								name:"Fisika",
								type:"line",
								smooth:!0,
								itemStyle:{normal:{areaStyle:{type:"default"}}},
								data:fisika
							},{
								name:"Biologi",
								type:"line",
								smooth:!0,
								itemStyle:{normal:{areaStyle:{type:"default"}}},
								data:biologi
							},{
								name:"Mineralogi",
								type:"line",
								smooth:!0,
								itemStyle:{normal:{areaStyle:{type:"default"}}},
								data:mineralogi
							  }
							]
						})
					}
				}
				
		   }
		},
		   dataType : "json"
	});	

}
		