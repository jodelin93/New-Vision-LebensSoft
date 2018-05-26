 <!-- jQuery  -->
        <script src="<?php echo ROOT; ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo ROOT; ?>assets/js/popper.min.js"></script>
        <script src="<?php echo ROOT; ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo ROOT; ?>assets/js/modernizr.min.js"></script>
        <script src="<?php echo ROOT; ?>assets/js/detect.js"></script>
        <script src="<?php echo ROOT; ?>assets/js/fastclick.js"></script>
        <script src="<?php echo ROOT; ?>assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo ROOT; ?>assets/js/jquery.blockUI.js"></script>
        <script src="<?php echo ROOT; ?>assets/js/waves.js"></script>
        <script src="<?php echo ROOT; ?>assets/js/jquery.nicescroll.js"></script>
        <script src="<?php echo ROOT; ?>assets/js/jquery.scrollTo.min.js"></script>

        <script src="<?php echo ROOT; ?>assets/plugins/skycons/skycons.min.js"></script>
        <script src="<?php echo ROOT; ?>assets/plugins/raphael/raphael-min.js"></script>
        <script src="<?php echo ROOT; ?>assets/plugins/morris/morris.min.js"></script>
        
        <script src="<?php echo ROOT; ?>assets/pages/dashborad.js"></script>
        <script src="<?php echo ROOT; ?>js/insert.js"></script>
        <!-- App js -->
        <script src="<?php echo ROOT; ?>assets/js/app.js"></script>
        <script>
             /* BEGIN SVG WEATHER ICON */
             if (typeof Skycons !== 'undefined'){
            var icons = new Skycons(
                {"color": "#fff"},
                {"resizeClear": true}
                ),
                    list  = [
                        "clear-day", "clear-night", "partly-cloudy-day",
                        "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                        "fog"
                    ],
                    i;

                for(i = list.length; i--; )
                icons.set(list[i], list[i]);
                icons.play();
            };

        // scroll

        $(document).ready(function() {
        
        $("#boxscroll").niceScroll({cursorborder:"",cursorcolor:"#cecece",boxzoom:true});
        $("#boxscroll2").niceScroll({cursorborder:"",cursorcolor:"#cecece",boxzoom:true}); 
        
        });
        </script>

         <script src="<?php echo ROOT; ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
         <script src="<?php echo ROOT; ?>assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
         <!-- Buttons examples -->
         <script src="<?php echo ROOT; ?>assets/plugins/datatables/dataTables.buttons.min.js"></script>
         <script src="<?php echo ROOT; ?>assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
         <script src="<?php echo ROOT; ?>assets/plugins/datatables/jszip.min.js"></script>
         <script src="<?php echo ROOT; ?>assets/plugins/datatables/pdfmake.min.js"></script>
         <script src="<?php echo ROOT; ?>assets/plugins/datatables/vfs_fonts.js"></script>
         <script src="<?php echo ROOT; ?>assets/plugins/datatables/buttons.html5.min.js"></script>
         <script src="<?php echo ROOT; ?>assets/plugins/datatables/buttons.print.min.js"></script>
         <script src="<?php echo ROOT; ?>assets/plugins/datatables/buttons.colVis.min.js"></script>
         <!-- Responsive examples -->
         <script src="<?php echo ROOT; ?>assets/plugins/datatables/dataTables.responsive.min.js"></script>
         <script src="<?php echo ROOT; ?>assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
 
         <!-- Datatable init js -->
         <script src="<?php echo ROOT; ?>assets/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="<?php echo ROOT; ?>assets/js/app.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable2').DataTable();  
                $('#decok').click(function(){
                    
                     document.location="<?php echo ROOT; ?>pages/verrouiller.php?polo=zzxc"
                    //alert('hdsgfkjf');

                });
            } );
        </script>

          

      