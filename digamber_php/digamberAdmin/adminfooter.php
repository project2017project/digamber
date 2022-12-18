<div class="span_11">
  <div class="col-md-6 col_4">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/clndr.css" type="text/css" />
    <script src="js/underscore-min.js" type="text/javascript"></script>
    <script src= "js/moment-2.2.1.js" type="text/javascript"></script>
    <script src="js/clndr.js" type="text/javascript"></script>
    <script src="js/site.js" type="text/javascript"></script>
    <script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  </div>
  <div class="clearfix"> </div>
</div>
</div>
</div>
</div>
<div class="copy"><p>Copyright 2022. All Rights Reserved. Designed by Mayank Goyal</p></div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });

	$( function() {

    var dateFormat = "mm/dd/yy",

      from = $( "#from" )

        .datepicker({

          defaultDate: "+1w",

          changeMonth: true,

          numberOfMonths: 1

        })

        .on( "change", function() {

          to.datepicker( "option", "minDate", getDate( this ) );

        }),

      to = $( "#to" ).datepicker({

        defaultDate: "+1w",

        changeMonth: true,

        numberOfMonths: 1

      })

      .on( "change", function() {

        from.datepicker( "option", "maxDate", getDate( this ) );

      });

 

    function getDate( element ) {

      var date;

      try {

        date = $.datepicker.parseDate( dateFormat, element.value );

      } catch( error ) {

        date = null;

      }

 

      return date;

    }

  } );

</script>