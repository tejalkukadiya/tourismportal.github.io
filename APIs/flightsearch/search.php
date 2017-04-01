<!DOCTYPE html>
<html>
<head>
<style>



.search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
        background-color: white;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
</style>


</style>
</head>
<body>
<form method="get" action="try.php">
<div class="">

    <input type="radio" name="triptype" value="oneway" id="oneway" checked>
    <label for="oneway">One Way</label>
    <input type="radio" name="triptype" value="twoway" id="twoway" >
    <label for="twoway">Round Trip</label>
</div>
    <div class="search-box">
        <input type="text" autocomplete="off" placeholder="From" name="source"  />
        <div class="result"></div>

        <br><br>
    </div>
    <div class="dest">
        <input type="text" autocomplete="off" placeholder="To" name="destination" />
        <div class="result"></div>
    </div>
    <div class="date">
        
        <input placeholder="Departing" class="date-picker" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="departdate" name="dateofdeparture">
        <input placeholder="Returning" class="date-picker" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="returndate" name="returndate" disabled="disabled">
         
    </div>
<div class="seat">
    <select name="seatingclass">
        <option value="E">Echonomy</option>
        <option value="B">Buisness</option>
    </select>
</div>
<div class="agegroup">
    <div>
        <label for="adult">Adult</label>
        <input type="number" name="adults" value="1" min="0">
    </div>
    <div>
    <label for="child">Children</label>
    <input type="number" name="children" min="0" value="0">
    </div>
    <div>
    <label for="infants">Infants</label>
    <input type="number" name="infants" min="0" value="0">
    </div>
    
</div>

<div>
    <input type="submit" name="submit" value="Search">
</div>
</form>

<!--<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(
    function(){
        $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");       
        if(inputVal.length){
            $.get("getuser.php", {q: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    })});

  $(document).ready(
        function(){
        if ($('input[name=triptype]:checked').val()=='oneway') {
            $(document.getElementById('#returndate')).attr("disabled", 'disabled');
       }
        else
        {
         $(document.getElementById('#returndate'));   
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    })

    
</script>

<script type="text/javascript">
    $(document).ready(
    function () {
        // body...
    }
        );
</script>



<!-- $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val(); -->
       <!--  var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
}); -->


</body>
</html>