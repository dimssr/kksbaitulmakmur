 <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2024 - Dims
              <a href="blank.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/datatables.min.js"></script>
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
    //datatables
        $('#Datatables').DataTable({
          columnDefs :[
            {
              "searchable" : false,
              "orderable" : false,
              "scrollX": true,
              "targets" : [0,3]
            }
          ],
          "order": [],
          "lengthMenu": [[50, 100, 250, 500, 1000, -1], [50, 100, 250, 500, 1000, "All"]],
          "pageLength": 50,
          "language": {
              "zeroRecords": "Data Tidak Ada",
          },
        }); 

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
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>