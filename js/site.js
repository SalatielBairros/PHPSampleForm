$(function () {
    FirstLoad();
    Events();
});

function FirstLoad() {
    $('#txtTelefone').mask('(99) 9999-9999?9');
    $('#txtCPF').mask('999.999.999-99');

    $("#btnAluno").addClass("active");
    $("#sAluno").show();
    $("#sFuncionario").hide();
}

function Events() {
    $("#btnAluno, #btnFuncionario").click(function () {
        $("#sAluno").toggle();
        $("#sFuncionario").toggle();
        $("#btnAluno").toggleClass("active");
        $("#btnFuncionario").toggleClass("active");
    });

}