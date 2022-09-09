



</div>

<!-- ./wrapper -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<!-- jQuery -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>


<!-- Export Functionality cdn-->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
<!-- Export Functionality cdn-->

<script>
    //var table = $('#activities-ajax').DataTable();
    
    $(document).ready(function () {  

        $(document).on('click', '.delete', function() {
        
            var id = $(this).data('id');
            var thisRef = $(this);
           
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                }
            });
            jQuery.ajax({
                url: "{{ url('/student/delete') }}",
                method: 'post',
                data: {
                    id: $(this).data('id'),
                },
                success: function(result){
                  
                    $(thisRef).parents('tr').remove();
                   
                }
            });
        }); 


        $('select').on('change', function() {
    
             var id = $(this).data('id');
             var val = $(this).val();
            
           
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                }
            });
            jQuery.ajax({
                url: "{{ url('/student/status') }}",
                method: 'post',
                data: {
                    id:id,
                    status: val,
                },
                success: function(result){
                  
                    $(thisRef).parents('tr').findChild('.status').text(val);
                    //var dattr = $(thisRef).parents('tr')
                    //$('.status').text(val)
                   
                }
            });

        });


        $(document).on('click', '.update', function() {
    
            var id = $(this).data('id');
             
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                }
            });
            jQuery.ajax({
                url: "{{ url('/student/edit') }}",
                method: 'post',
                data: {
                    id:id,
                },
                success: function(result){
                  
                    //$(thisRef).parents('tr').findChild('.status').text(val);
                    //var dattr = $(thisRef).parents('tr')
                    //$('.status').text(val)
                   
                }
            });

        });


        

    });
</script>



