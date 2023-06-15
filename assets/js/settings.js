const host = "http://127.0.0.1:8000";

const getField = (id) => {
  return document.getElementById(id);
};

const getSession = () => {
  return JSON.parse(window.sessionStorage.getItem("session"));
};

const validateSession = () => {
  if ([null, undefined].includes(window.sessionStorage.getItem("session"))) {
    window.location.href = "?view=Login";
  }
};
