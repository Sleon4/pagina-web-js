getField("form-auth").addEventListener("submit", (e) => {
  e.preventDefault();
  getField("btn-auth").disabled = true;
  getField("btn-auth").innerHTML = `
    <div class="spinner-border spinner-border-sm" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  `;

  const form = new FormData();
  form.append("users_email", getField("users_email").value);
  form.append(
    "users_password",
    CryptoJS.SHA256(getField("users_password").value)
  );

  axios
    .post(host + "/api/auth/login", form, {
      headers: {
        "Content-Type": "multipart/form-data",
      },
    })
    .then((res) => {
      console.log(res.data);
      getField("btn-auth").disabled = false;
      getField("btn-auth").textContent = "Ingresar";

      if (res.data.status === "success") {
        window.sessionStorage.setItem(
          "session",
          JSON.stringify(res.data.data.session)
        );
        getField("users_email").value = "";
        getField("users_password").value = "";
        window.location.href = "?view=Home";
      }
    });
});
