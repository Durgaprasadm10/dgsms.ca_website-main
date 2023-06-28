function setDeviceOptions(selectedRule) {
    //alert("onchange called " + selectedRule);
    var selected_rule_value = document.getElementById('rule_select_id').value;
    var selected_device_value = document.getElementById('device_select_id').value;

    document.getElementById('device_select_id').innerHTML = "";
    /*
    if(selectedRule == cfrUsaOptionValue){
        document.getElementById('device_select_id').innerHTML = "<option value=''>select</option><option value='"+andriodDeviceOptionValue+"'>"+andriodDeviceOptionText+"</option>";
    }else{
        document.getElementById('device_select_id').innerHTML = "<option value=''>select</option><option value='"+andriodDeviceOptionValue+"'>"+andriodDeviceOptionText+"</option><option value='"+iosDeviceOptionValue+"'>"+iosDeviceOptionText+"</option>";
    }
    */
    document.getElementById('device_select_id').innerHTML = "<option value=''>select</option><option value='" + andriodDeviceOptionValue + "'>" + andriodDeviceOptionText + "</option><option value='" + iosDeviceOptionValue + "'>" + iosDeviceOptionText + "</option>";
    getProductsForDisplay();
    getCountries(selectedRule);
    $("#email_id").val("");
    $("#divEmailCheck").html("");
}