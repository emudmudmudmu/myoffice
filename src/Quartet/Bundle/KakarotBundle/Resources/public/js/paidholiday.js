$(document).ready(function(e) {

    $("#quartet_bundle_kakarotbundle_paidholiday_startDate_year").change( function (e){
        change_endDate(e);
    });

    $("#quartet_bundle_kakarotbundle_paidholiday_startDate_month").change( function (e){
        change_endDate(e);
    });

    $("#quartet_bundle_kakarotbundle_paidholiday_startDate_day").change( function (e){
        change_endDate(e);
    });

    function change_endDate(e) {
        $("#quartet_bundle_kakarotbundle_paidholiday_endDate_year").val($("#quartet_bundle_kakarotbundle_paidholiday_startDate_year").val());
        $("#quartet_bundle_kakarotbundle_paidholiday_endDate_month").val($("#quartet_bundle_kakarotbundle_paidholiday_startDate_month").val());
        $("#quartet_bundle_kakarotbundle_paidholiday_endDate_day").val($("#quartet_bundle_kakarotbundle_paidholiday_startDate_day").val());
    }
});