 <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2024 - Dims
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('') ?>/assets/js/jquery.js"></script>
    <script src="<?php echo base_url('') ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('') ?>/assets/select2/dist/js/select2.min.js"></script>
    <script src="<?php echo base_url('') ?>/assets/js/datatables.min.js"></script>
    <script src="<?php echo base_url('') ?>/assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="<?php echo base_url('') ?>/assets/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url('') ?>/assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url('') ?>/assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url('') ?>/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
    //datatables
        $('#Datatables').DataTable({
          
          "lengthMenu": [[50, 100, 250, 500, 1000, -1], [50, 100, 250, 500, 1000, "All"]],
          "pageLength": 50,
          "language": {
              "zeroRecords": "Data Tidak Ada",
          },
        }); 

        }); 

    </script>
    <script>
// select2
$(document).ready(function() {
    $('.js-example-basic-single').select2({theme: "bootstrap"});
});
</script>
    <script>
    if ( typeof CKEDITOR == 'undefined' )
    {
        document.write(
        'CKEditor not found');
    }
    else
    {
        var editor = CKEDITOR.replace( 'sejarah', {height: 400} );    
        CKFinder.setupCKEditor( editor, '' ) ;
    }
    </script>

    <script>
    if ( typeof CKEDITOR == 'undefined' )
    {
        document.write(
        'CKEditor not found');
    }
    else
    {
        var editor = CKEDITOR.replace( 'desk_jenis', {height: 400} );    
        CKFinder.setupCKEditor( editor, '' ) ;
    }
    </script>

    <script>
    if ( typeof CKEDITOR == 'undefined' )
    {
        document.write(
        'CKEditor not found');
    }
    else
    {
        var editor = CKEDITOR.replace( 'visi_misi', {height: 400} );    
        CKFinder.setupCKEditor( editor, '' ) ;
    }
    </script>

    <script>
    if ( typeof CKEDITOR == 'undefined' )
    {
        document.write(
        'CKEditor not found');
    }
    else
    {
        var editor = CKEDITOR.replace( 'desk_produk', {height: 400} );    
        CKFinder.setupCKEditor( editor, '' ) ;
    }
    </script>
    <!--common script for all pages-->
    <script src="<?php echo base_url('') ?>/assets/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>