</div></div></ul>
<footer class="text-center">&copy; 2017
<a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a></footer>
  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap.min.js"></script>
    <script type="assets/text/javascript" src="js/jquery.toastmessage.js"></script>
        
    <script src="assets/js/form-component.js"></script>    
    <script src="assets/js/bootstrap-datepicker.js"></script>
    <script src="assets/js/daterangepicker.js"></script>

    <script src="assets/js/zebra_datepicker.js" ></script>

    <script type="text/javascript" src="assets/js/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="assets/js/ckeditor/ckeditor.js"></script>


    <script type="text/javascript" src="assets/jquery-ui/jquery-ui.js"></script>

    <script>
    $(document).ready(function() {

      $('#tabeldata').DataTable();

     });



    $(document).ready(function () {
        $('#datepicker').datepicker({
            dateFormat: 'yy-mm-dd',          
            minDate: 0,
            maxDate: '+7'
        });  
    });


    function showSuccessToast() {
        $().toastmessage('showSuccessToast', "Data telah dihapus");
    }
    function showStickySuccessToast() {
        $().toastmessage('showToast', {
            text     : 'Sukses, Tambah lagi',
            sticky   : true,
            position : 'top-right',
            type     : 'success',
            closeText: '',
            close    : function () {
                console.log("toast is closed ...");
            }
        });

    }
    function showNoticeToast() {
        $().toastmessage('showNoticeToast', "Kami telah menentukan nilai yang boleh diinput");
    }
    function showStickyNoticeToast() {
        $().toastmessage('showToast', {
             text     : 'Kami telah menentukan nilai yang boleh diinput',
             sticky   : true,
             position : 'top-right',
             type     : 'notice',
             closeText: '',
             close    : function () {console.log("toast is closed ...");}
        });
    }
    function showWarningToast() {
        $().toastmessage('showWarningToast', "Peringatan, password anda masukkan salah");
    }
    function showStickyWarningToast() {
        $().toastmessage('showToast', {
            text     : 'Peringatan, password anda masukkan salah',
            sticky   : true,
            position : 'top-right',
            type     : 'warning',
            closeText: '',
            close    : function () {
                console.log("toast is closed ...");
            }
        });
    }
    function showErrorToast() {
        $().toastmessage('showErrorToast', "Data gagal dihapus, (hapus dulu data yang terkait pada menu lainnya)");
    }
    function showStickyErrorToast() {
        $().toastmessage('showToast', {
            text     : 'Gagal total! Coba lagi',
            sticky   : true,
            position : 'top-right',
            type     : 'error',
            closeText: '',
            close    : function () {
                console.log("toast is closed ...");
            }
        });
    }
    $('#select-all').click(function(event) {   
        if(this.checked) {
            // Iterate each checkbox
            $(':checkbox').each(function() {
                this.checked = true;                        
            });
        } else{
            $(':checkbox').each(function() {
                this.checked = false;                        
            });
        }
    });
    $('#select-all2').click(function(event) {   
        if(this.checked) {
            // Iterate each checkbox
            $(':checkbox').each(function() {
                this.checked = true;                        
            });
        } else{
            $(':checkbox').each(function() {
                this.checked = false;                        
            });
        }
    });


    var editor = CKEDITOR.replace( 'editor1', {
    filebrowserBrowseUrl : 'assets/js/ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl : 'assets/js/ckfinder/ckfinder.html?type=Images',
    filebrowserFlashBrowseUrl : 'assets/js/ckfinder/ckfinder.html?type=Flash',
    filebrowserUploadUrl : 'assets/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl : 'assets/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl : 'assets/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});


CKFinder.setupCKEditor( editor, '../' );
    </script>
  </body>
</html>