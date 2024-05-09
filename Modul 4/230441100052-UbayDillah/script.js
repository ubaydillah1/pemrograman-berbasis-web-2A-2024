// script.js

// Dropdown
const dropdown = document.getElementById("myDropdown");
const button = document.querySelector("button");

button.addEventListener("click", function () {
  dropdown.classList.toggle("show");
});

// To do list
const data = ["Belajar", "Makan", "Belanja"];

function tampil() {
  const tabel = document.getElementById("tabel");
  tabel.innerHTML = "<tr><th>No</th><th>To do</th><th>Action</th></tr>";
  for (let i = 0; i < data.length; i++) {
    const btnEdit =
      "<button class='btn-edit' onclick='edit(" + i + ")'>Edit</button>";

    const btnHapus =
      "<button class='btn-hapus' onclick='hapus(" + i + ")'>Hapus</button>";

    const btnSelesai =
      "<button class='btn-selesai' onclick='tandaiSelesai(" +
      i +
      ")'>Tandai Selesai</button>";

    j = i + 1;
    tabel.innerHTML +=
      "<tr><td>" +
      j +
      "</td><td>" +
      data[i] +
      "</td><td>" +
      btnEdit +
      " " +
      btnHapus +
      " " +
      btnSelesai +
      "</td></tr>";
  }
}

function tambah() {
  const input = document.querySelector("input[name=jurusan]");
  data.push(input.value);
  tampil();
  input.value = "";
}

function edit(id) {
  const baru = prompt("Edit", data[id]);
  data[id] = baru;
  tampil();
}

function hapus(id) {
  data.splice(id, 1);
  tampil();
}

function tandaiSelesai(id) {
  const btnSelesai = document.querySelectorAll(".btn-selesai")[id];
  data[id] = data[id].startsWith("[Selesai] ")
    ? data[id].substring(10)
    : "[Selesai] " + data[id];
  tampil();
}

tampil();
