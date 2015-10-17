/** Document Ready Functions **/
/********************************************************************/

$( document ).ready(function() {

    

    $('#inputDays').change(function(event){
        vD = $(this).val();
        if(vD>4)
        {
            alert("El numero de dias maximo permitido es 4");
            $(this).val(4);
        }
        if(vD<=0)
        {
            alert("ingresa un numero de dias valido")
            $(this).val(1);
        }

        days = $('#inputDays').val();
        liter = $('#inputLiter').val();
        ammount = $('#inputAmmount').val();

        total = days*liter*ammount
        total = parseFloat(total).toFixed(2)
        $('#inputTotal').val(total)
       
    })
    $('#inputLiter').change(function(event){
        vL = $(this).val();

        if(vL>4)
        {
            alert("El numero de dias maximo permitido es 4");
            $(this).val(4);
        }
        if(vL<=0)
        {
            alert("ingresa un numero de dias valido")
            $(this).val(1);
        }

        days = $('#inputDays').val();
        liter = $('#inputLiter').val();
        ammount = $('#inputAmmount').val();
        
        total = days*liter*ammount
        total = parseFloat(total).toFixed(2)
        $('#inputTotal').val(total)
       
    })

    $('#inputAmmount').change(function(event){
        vA = $(this).val();
        vA = parseFloat(vA).toFixed(2);
        $(this).val(vA);

        // if(vL>4)
        // {
        //     alert("El numero de dias maximo permitido es 4");
        //     $(this).val(4);
        // }
        if(vA<=0)
        {
            alert("ingresa un numero de dias valido")
            $(this).val(0.50);
        }

        days = $('#inputDays').val();
        liter = $('#inputLiter').val();
        ammount = $('#inputAmmount').val();
        
        total = days*liter*ammount
        total = parseFloat(total).toFixed(2)
        $('#inputTotal').val(total)
       
    })

});
