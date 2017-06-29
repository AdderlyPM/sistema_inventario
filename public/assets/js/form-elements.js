$(document).ready(function () {

    $("#date").mask("9999-99-99",{placeholder:"yyyy-mm-dd"});

    $("#phone").mask("(999) 999-9999");
    
    $("#phoneext").mask("(999) 999-9999? x99999");

    $("#tin").mask("99-9999999");

    $("#ssn").mask("999-99-9999");
    
                
    $("#percent").mask("99%");
    
    $("#currency").mask("$999,999,999.00");
    
    $("#productkey").mask("a*-999-a999");
    
    //            seleect2
    $(".name_search").select2({
        placeholder: "Select"
    });

    $(".multi").select2();

    $(".mintwo").select2({
        minimumInputLength: 2
    });

    $(".maxallowed").select2({
        maximumSelectionSize: 3
    });

    $('#pre-selected-options').multiSelect();
    
    //            date plugin
    $('.datepicker').datepicker()

    $('#date-popup input').datepicker({});

    $('#date-popup-group .input-group.date').datepicker({});

    $('#date-popup-startend .input-group.date').datepicker({
        startDate: "2015-03-17",
        endDate: "2015-03-25"
    });

    $('#date-disabled .input-group.date').datepicker({
        daysOfWeekDisabled: "1,5"
    });

    $('#date-range .input-daterange').datepicker({});

    $('#date-range-disable .input-daterange').datepicker({
        startDate: "2015-03-17",
        endDate: "2015-03-25"
    });
    
    // color plugin
    $('.color-default').colorpicker();
    
    $('.inputgrp').colorpicker();
                  
    // Horizontal mode
    $('#color-rgb').colorpicker({
        format: 'rgba', // force this format
        horizontal: true
    });
               
    
});