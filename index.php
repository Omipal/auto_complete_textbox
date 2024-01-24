<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1 class="text-center bg-dark text-white p-5">Auto complete textbox using jquery ajax</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4 mx-auto">
        <input type="text" placeholder="Enter Youtr City" id="txt" class=" form-control">
        <div id="city_list"></div>
      </div>
    </div>
  </div>


  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#txt").keyup(function() {
        const city_text = $("#txt").val();
        if (city_text != '') {
          $.ajax({
            url: 'search.php',
            type: 'post',
            data: {
              city_text: city_text
            },
            success: function(response) {
              $("#city_list").fadeIn(1000);
              $("#city_list").html(response);
            }
          });
        }
      });
      $(document).on("click", "li", function() {
        $("#txt").val($(this).text());
        $("#city_list").fadeOut(500);
      })
    });
  </script>
</body>

</html>