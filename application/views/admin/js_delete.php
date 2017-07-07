 <!-- JS SCRIPT FOR DELETE CONFIRMATION -->
 <script type="text/javascript">
   function confirmDelete(event) {
    event.preventDefault();
    var isConfirm = confirm($(event.currentTarget).attr("title") + "?");
    
    if(isConfirm) {
      var href = $(event.currentTarget).attr("href");
      window.location = href;
    } 
   }
 </script>
