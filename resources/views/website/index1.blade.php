<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <h1>Hello, world!</h1>


    {{-- <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            <input type="text" name="name" id="country_name" placeholder="Enter Name here...">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    <div class="container box">
        <div class="form-group">
             <input type="text" name="country_name" id="country_name" class="form-control" placeholder="Enter Country Name" />
             <div id="countryList"></div>
        </div>
        {{-- {{ csrf_field() }} --}}
        @csrf
     </div>



    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>


    {{-- <script>
        // $('#name').on();

        $(document).ready(function(){
            $('#name').keyup(function(){
                var query = $(this).val();
                // alert(query);
                if(query != '')
                {
                    var _token = $('input[name = "_token"]').val();
                    $.ajax({
                        url : "{{route(autocomplete.fetch)}}",
                        method: "POST",
                        data : {query:query, _token: _token},
                        success : function(data){

                        }
                    })
                }
            })
        })

    </script> --}}



<script>
    $(document).ready(function(){
     
        $('#country_name').keyup(function(){ 
            var query = $(this).val(); 
            if(query != '')
            {
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url:"{{ route('autocomplete.fetch') }}",
                    method:"POST",
                    data:{query:query, _token:_token},
                    success:function(data){
                    $('#countryList').fadeIn();  
                        $('#countryList').html(data);
                    }
                });
            }
        });
     
        $(document).on('click', 'li', function(){  
            $('#country_name').val($(this).text());  
            $('#countryList').fadeOut();  
        });  
     
    });
    </script>




</body>

</html>
