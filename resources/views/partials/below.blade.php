



<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->





<!--  ASSETS - Start -  -->
<script src="https://kit.fontawesome.com/f4106a4f9b.js" crossorigin="anonymous"></script>
<!--  ASSETS - End -  -->


<!-- Datatables resources -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.13.4/b-2.3.6/b-html5-2.3.6/b-print-2.3.6/datatables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.colVis.min.js"></script>
<!-- Datatables resources -->


<!-- Local JS files -->
<script src="./JS/selectTagsFiltering.js" type="text/javascript"></script>
<!-- Local JS files -->


<script>
// Block browser's previous button
history.pushState({ page: 1 }, "title 1", "#nbb");
window.onhashchange = function (event) {
    window.location.hash = "nbb";
};


const confirmAction = () => {
  const answer = confirm("Are you sure for this action?\nWarning: This can't be recovered");
  if (answer == false){
    event.preventDefault();
  }
}



// confirm before logout
const confirmLogout = () => {
  const answer = confirm("Are you sure you want to logout?");
  if (answer == false){
    event.preventDefault();
  }
}
</script>
</body>

</html>