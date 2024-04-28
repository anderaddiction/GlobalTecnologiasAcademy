$(document).ready(function () {
    var url = $("#route").attr("route");
    var token = $('meta[name="csrf-token"]').attr("content");
    let table = $("#employee-table").DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        ajax: "employee",
        columns: [
            { data: "name", name: "name" },
            { data: "last_name", name: "last_name" },
            { data: "other_name", name: "other_name" },
            { data: "email", name: "email" },
            {
                data: null,
                render: function (data) {
                    if (data.country == 0) {
                        return "Colombia";
                    } else {
                        return "Estados Unidos";
                    }
                },
            },
            { data: "identification_type", name: "identification_type" },
            { data: "identification", name: "identification" },
            { data: "fecha_ingreso", name: "fecha_ingreso" },
            {
                data: null,
                render: function (data) {
                    if (data.status == 1) {
                        return "Activo";
                    }
                },
            },
            {
                data: null,
                render: function (data) {
                    if (data.area == 0) {
                        return "Administración";
                    } else if (data.area == 1) {
                        return "Financiera";
                    } else if (data.area == 2) {
                        return "Compras";
                    } else if (data.area == 3) {
                        return "Infraestructura";
                    } else if (data.area == 4) {
                        return "Operación";
                    } else if (data.area == 5) {
                        return "Talento Humano";
                    } else if (data.area == 6) {
                        return "Servicios Varios";
                    } else if (data.area == 7) {
                        return "Otros";
                    }
                },
            },
            { data: "register_date", name: "register_dates" },
            {
                data: null,
                render: function (data) {
                    return `<button class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full btn-edit' data-route="employee/${data.id}/edit" data-id="${data.id}">Editar</button>
                    <button class='bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full btn-delete' data-route="employee/${data.id}" data-id="${data.id}">Eliminar</button>`;
                },
            },
        ],
        language: {
            url: "https://cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json",
            decimal: ",",
            thousands: ".",
        },
    });
    //Editar
    $("#employee-table tbody").on("click", ".btn-edit", function () {
        let row = $(this).parents("tr")[0];
        //for row data
        //console.log(table.row(row).data().id);
        var url = $(this).parents("td .btn-edit").prevObject[0].dataset.route;
        var id = $(this).parents("td .btn-edit").prevObject[0].dataset.id;

        $.ajax({
            type: "GET",
            headers: { "X-CSRF-Token": token },
            url: url,
            data: id,
            dataType: "json",
            success: function (response) {
                console.log(response);
                window.location.href = `employee/${response}/edit`;
            },
        });
    });
    //Eliminar
    $("#employee-table tbody").on("click", ".btn-delete", function () {
        let row = $(this).parents("tr")[0];
        var url = $(this).parents("td .btn-delete").prevObject[0].dataset.route;
        var id = $(this).parents("td .btn-delete").prevObject[0].dataset.id;

        Swal.fire({
            title: "¿Está seguro de que desea eliminar el empleado?",
            text: "¡Si lo hace no pordrá revertir esto!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "¡Si, Borralo!",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "DELETE",
                    headers: { "X-CSRF-Token": token },
                    url: url,
                    data: id,
                    dataType: "json",
                    success: function (response) {
                        $("#employee-table").DataTable().ajax.reload();
                        Swal.fire({
                            title: "Borrado",
                            text: response,
                            icon: "success",
                        });
                    },
                });
            }
        });
    });
});
