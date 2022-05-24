/* Validation of form */
const validateRegistration = () => {
  if (document.dati.inputNome.value == "") {
    alert("Il campo Nome è vuoto");
    return false;
  }
  if (document.dati.inputCognome.value == "") {
    alert("Il campo Cognome è vuoto");
    return false;
  }
  if (document.dati.inputEmail.value == "") {
    alert("Il campo Email è vuoto");
    return false;
  }
  if (document.dati.inputPassword.value == "") {
    alert("Il campo Password è vuoto");
    return false;
  }
  if (document.dati.inputIndirizzo.value == "") {
    alert("Il campo Indirizzo è vuoto");
    return false;
  }
  if (document.dati.inputCitta.value == "") {
    alert("Il campo Città è vuoto");
    return false;
  }
  if (document.dati.CAP.value == "") {
    alert("Il campo CAP è vuoto");
    return false;
  }
  if (!document.dati.inputCheck.checked) {
    alert("Per registrarti devi acconsentire all'invio dei dati");
    return false;
  }
  if (
    document.dati.inputPassword.value !== document.dati.inputPassword2.value
  ) {
    alert("Le due password non corrispondono");
    return false;
  }
  alert("Dati inseriti correttamente");
  return true;
};

/* Validation of Login Form */
const validateLogin = () => {
  if (!document.dati.inputEmail.value) {
    alert("Il campo Email è vuoto");
    return false;
  }
  if (!document.dati.inputPassword.value) {
    alert("Il campo Password è vuoto");
    return false;
  }
  return true;
};
