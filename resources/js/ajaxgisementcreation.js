$(document).ready(function(){
    $('#ajaxGisementCreation').click(function(e){
        //$('[data-bs-toggle="tooltip"]').tooltip();
        e.preventDefault();
            var formData = new FormData();
            formData.append("_token", $("input[name='_token']").val());
            formData.append("pays", $("#pays").val());
            formData.append("capaciteEstimee", $("#capaciteEstimee").val());
            formData.append("capaciteConfirmee", $("#capaciteConfirmee").val());
            formData.append("composition", $("#composition").val());
            formData.append('image', $('input[type=file]')[0].files[0]);
            $.ajax({
                url: "creationAjax",//Il faut que la route existe
                type:'POST',
                contentType: false,
                processData: false,
                data: formData,
                success: function(data) {
                    if (data === "reussi"){
                        $("#opeReussi").toast('show');
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert(xhr.status);
                    alert(thrownError);
                }
        });
    });
});

//donee.append();