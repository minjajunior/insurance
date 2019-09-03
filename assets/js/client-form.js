$(document).ready(function(){
    $("#j-pro").justFormsPro({
        rules:{
            cname: {required:true},
            company: {required:true},
            type: {required:true},
            amount: {required:true, number:true},
            date_insured: {requiredFromGroup:[1,".date-group"]},
            date_expiry:{requiredFromGroup:[1,".date-group"]},
            phone_no:{required:true, number:true},
            covernote_no:{required:true},
            sticker_no:{required:true},
            receipt_no:{required:true}
        },
        messages:{
            cname: {required: "Add client name"},
            company: {required: "Choose Insurance company"},
            type: {required: "Choose Insurance type"},
            amount: {required: "Add amount paid", number: "Please enter numbers only"},
            date_insured:{requiredFromGroup:"Add date"},
            date_expiry:{requiredFromGroup:"Add date"},
            phone_no:{required:"Add contact number"},
            covernote_no:{required:"Add cover note number"},
            sticker_no:{required:"Add sticker number"},
            receipt_no:{required:"Add receipt number"}

        }
    });
});