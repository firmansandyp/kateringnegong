

modalBahanUpdate = document.getElementById("modalBahanUpdate");



function setUpdateForm(event)
{
    bahanId = event.target.id;
    document.getElementById("formBahanUpdate").action = "/bahan/" +bahanId+"/update";
}