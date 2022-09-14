$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    var listIncidences = $("#DataTableIncidence").DataTable({
        ajax: "api/information",
        columns: [
            {
                data: "id",
                bSearchable: false,
            },
            {
                data: "name",
                bSearchable: true,
            },
            {
                data: "email",
                bSearchable: true,
            },
            {
                data: "agent",
                bSearchable: true,
            },
            {
                data: "activity",
                bSearchable: true,
            },
            {
                data: "comments",
                bSearchable: true
            },
        ],
        dom: "Bfrtip",
        buttons: ["csv", "excel", "pdf"],
    });

    // Function for reset inputs
    $(function () {
        const $modalWindow = $("#userModal");
        const $buttonModalWindow = $("#buttonModalWindow");

        $buttonModalWindow.on("click", function () {
            $modalWindow.modal("show");
        });

        $modalWindow.on("hidden.bs.modal", function (event) {
            const $form = $modalWindow.find("form");
            $form[0].reset();
            // reset id if user first opens modal to edit
            $("#id").val("");
        });
    });

    $("#saveUser").click(function (e) {
        // Avoid page reload
        e.preventDefault();

        var id = $("#id").val();
        var name = $("#name").val();
        var email = $("#email").val();
        var agent = $("#agent").val();
        var activity = $("#activity").val();
        var comments = $("#comments").val();

        $.ajax({
            type: "POST",
            url: "api/information",
            data: {
                name: name,
                email: email,
                agent: agent,
                activity: activity,
                comments: comments
            },
            success: function (response) {
                Swal.fire({
                    icon: "success",
                    title: response.message,
                    showConfirmButton: false,
                    timer: 1500,
                });
                // hide the modal
                $("#userModal").modal("hide");
                // refresh dataTable
                listIncidences.ajax.reload();
            },
            failure: function (data) {
                alert(data.responseText);
            },
            error: function (data) {
                //Swal.fire(data.responseText);
                //console.log(data.responseText);
                var err = eval("(" + data.responseText + ")");
                if (err.errors.email[0]) {
                Swal.fire(
                    "Este correo electrónico ya fue utilizado, escriba otro"
                );
            } else {
                Swal.fire(data.responseText);
            }
            },
        });
    });

});
