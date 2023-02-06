// Forms Multi Select

$(document).ready(() => {
    $(".multiselect-dropdown,.select2").select2({
      theme: "bootstrap4",
      placeholder: "Selecione uma opção",
    });

    $("#example-single").multiselect({
      inheritClass: true,
    });

    $("#example-multi").multiselect({
      inheritClass: true,
    });

    $("#example-multi-check").multiselect({
      inheritClass: true,
    });
});
