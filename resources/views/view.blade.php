<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .p1 {
            border-bottom: 2px solid black;
        }
    </style>
</head>
<body>
<div class="p1">
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-3 offset-sm-1">
                <h1>StoreGame</h1>
            </div>
            <div class="col-sm-5 offset-sm-3">
                <h1 style="align-content: center">List</h1>
            </div>
        </div>
    </div>
    <br>
</div>

<br>
<br>
<br>

<div class="p1">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h2>Menu</h2>
                <br>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><h4>-Giới thiệu</h4></a>
                    </li>
                    <br>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><h4>-List game</h4></a>
                    </li>
                    <br>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><h4>-Hỗ trợ</h4></a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-8">
                <h2>List Products</h2>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-6">
              <span class="input-group-append">
<!--              <button class="btn btn-outline-secondary border" type="button">-->
                  <!--                    <i class="fa fa-search">Search</i>-->
                  <!--              </button>-->
            </span>
                            <input class="form-control" type="search" placeholder="search" id="example-search-input1">
                        </div>
                        <div class="col-6">
              <span class="input-group-append">
<!--              <button class="btn btn-outline-secondary border" type="button">-->
                  <!--                    <i class="fa fa-search">Search</i>-->
                  <!--              </button>-->
            </span>
                            <input class="form-control" type="search" placeholder="search" id="example-search-input2">
                        </div>
                    </div>
                </div>

                <br>

                <div class="container">
                    <br>
                    <input class="form-control" type="search" placeholder="search" id="myInput">
                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Price</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody id="myTable">
                        <tr>
                            <td>Left for dead 2</td>
                            <td>2009</td>
                            <td>2$</td>
                            <td>Stocking</td>
                        </tr>
                        <tr>
                            <td>PUBG</td>
                            <td>2017</td>
                            <td>11$</td>
                            <td>Stocking</td>
                        </tr>
                        <tr>
                            <td>WWE2k19</td>
                            <td>2018</td>
                            <td>39,99$</td>
                            <td>Out of stocking</td>
                        </tr>
                        <tr>
                            <td>Fifa2020</td>
                            <td>2019</td>
                            <td>49,99$</td>
                            <td>Stocking</td>
                        </tr>
                        <tr>
                            <td>CS:GO</td>
                            <td>2012</td>
                            <td>9$</td>
                            <td>Stocking</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <br>



                <br>

                <div class="container">
                    <div class="row">
                        <div class="col-3 offset-1">
                            <h3><< 1</h3>
                        </div>

                        <div class="col-3 offset-1">
                            <h3>2</h3>
                        </div>

                        <div class="col-4">
                            <h3>3 >></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
</div>

<footer>
    <br>
    <br>
    <div class="container">
        <h1 style="align-content: center">Footer</h1>
    </div>
    <br>
    <br>
</footer>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
</body>
</html>
