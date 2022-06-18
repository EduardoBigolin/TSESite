function verifForm() {
  const nome = $("#Nome");
  const RG = $("#RG");
  const CPF = $("#CPF");
  const Sexo = $("#Sexo");
  const Etnia = $("#Etnia");
  const UF = $("#UF");
  const Telefone = $("#Telefone");
  const Email = $("#Email");
  if (nome.val() == "") {
    alert("Preencha o campo Nome");
    nome.focus();
    nome.css("border", "red solid 1px");
    return false;
  }
  if (RG.val().length !== 8) {
    alert("O RG deve ter 8 digitos!");
    RG.focus();
    RG.css("border", "red solid 1px");
    return false;
  }

  if (CPF.val().length !== 11) {
    alert("O CPF deve ter 11 digitos!");
    CPF.focus();
    CPF.css("border", "red solid 1px");
    return false;
  }
  console.log(Sexo);
  if (Sexo.val() == "") {
    alert("Selecione o sexo!");
    Sexo.focus();
    return false;
  }
  if (Etnia.val() == "-1") {
    alert("Selecione a etnia!");
    Etnia.focus();
    Etnia.css("border", "red solid 1px");
    return false;
  }
  if (UF.val().length != 2) {
    alert("Selecione o estado!");
    UF.css("border", "red solid 1px");
    UF.focus();
    return false;
  }
  if (Telefone.val().length !== 10) {
    alert("O telefone deve ter 10 digitos!");
    Telefone.focus();
    Telefone.css("border", "red solid 1px");
    return false;
  }
  if (Email.val() == "") {
    alert("Preencha o campo Email!");
    Email.focus();
    Email.css("border", "red solid 1px");
    return false;
  }
  return true;
}
