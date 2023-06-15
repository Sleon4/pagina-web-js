getField("form-register").addEventListener("submit", (e) => {
  e.preventDefault();

  const form = new FormData();
  form.append("users_name", getField("users_name").value);
  form.append("users_lastname", getField("users_lastname").value);
  form.append("users_email", getField("users_email").value);
  form.append(
    "users_password",
    CryptoJS.SHA256(getField("users_password").value)
  );

  axios
    .post(host + "/api/users/create", form, {
      headers: {
        "Content-Type": "multipart/form-data",
      },
    })
    .then((res) => {
      console.log(res.data);

      if (res.data.status === "success") {
        getField("users_name").value = "";
        getField("users_lastname").value = "";
        getField("users_email").value = "";
        getField("users_password").value = "";
      }
    });
});
