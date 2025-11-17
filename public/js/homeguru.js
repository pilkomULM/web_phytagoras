
const baseUrl = window.location.origin;
const formData = document.getElementById("siswa-form")
const idn = document.getElementById("idn");

const modal_tambah = new bootstrap.Modal("#modal-siswa")
const modal_title = document.getElementById("label-modal-siswa");
const modal_edit_button = document.getElementById("tombol-edit");
const modal_tambah_button = document.getElementById("tombol-tambah");
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }

})
const deletePrompt = Swal.mixin({
    customClass: {
        confirmButton: 'btn btn-danger mx-3',
        cancelButton: 'btn btn-success'
    },
    buttonsStyling: false
})
document.getElementById("modal-siswa").addEventListener("hidden.bs.modal", function () {
    formData.reset();
    idn.value = null;
    modal_title.innerHTML = "Tambah Siswa";
    modal_tambah_button.classList.remove("d-none");
    modal_edit_button.classList.add("d-none");
    clearValidate();
});
var dataTable = $("#table-siswa").DataTable({
    language: {
        loadingRecords: "Harap tunggu, Memuat data Siswa...",
        zeroRecords: "Tidak ada data yang tersedia."
    },
    ajax: {
        url: `${baseUrl}/siswa/get`,
        dataSrc: ''
    },
    columnDefs: [
        {
            render: function (data, type, row) {
                return `<button class="btn btn-success m-1 btn-edit" onclick=siswaEdit("${row["id_user"]}")><i class="fa-solid fa-user-pen"></i> Edit</button>
                            <button class="btn btn-danger btn-delete" onclick='siswaDelete("${row["id"]}")'><i class="fa-solid fa-trash"></i> Hapus</button>
                            `
            },
            targets: 4
        }
    ],
    columns: [
        {
            data: null, render: function (data, type, row, meta) {
                return meta.row + 1;
            }
        },
        {
            data: 'nama'
        },
        {
            data: 'noinduk'
        },
        {
            data: 'kelas'
        }
    ],
    paging: true
})

document.getElementById("pilih_kelas").addEventListener("change",function(e){
    
    var kelasVal = e.target.value;
    if(kelasVal == "all"){
        dataTable.ajax.url(`${baseUrl}/siswa/get`).load();
    }else{
        dataTable.ajax.url(`${baseUrl}/siswa/get/${kelasVal}`).load()
    }

});

formData.addEventListener("submit", function (e) {
    e.preventDefault();
    var data = new FormData(formData);
    axios.post(`${baseUrl}/siswa/store`, data)
        .then(function (response) {
            modal_tambah.hide();
            formData.reset();
            Toast.fire({
                icon: 'success',
                title: 'Siswa Berhasil ditambahkan!'
            });
            dataTable.ajax.reload();
        })
        .catch(function (error) {
            if (error.response) {
                console.log(error.response.data)
                if(error.response.data.errors == undefined){
                    tepianError(error.response.data.error);
                    Toast.fire({
                        icon: 'error',
                        title: "<b> Kesalahan </b> : Terjadi kesalahan!"
                    });
                }else{
                    validateFormTambah(error.response.data.errors)
                    Toast.fire({
                        icon: 'error',
                        title: "<b> Kesalahan </b> : " + error.response.data.message
                    });
                }
             
              

            } else if (error.request) {
                Toast.fire({
                    icon: 'kesalahan',
                    title: 'Koneksi anda tidak stabil, refresh halaman!',
                });
            } else {
                Toast.fire({
                    icon: 'kesalahan',
                    title: 'terjadi kesalahan!',
                });
            }
        })

})

function tepianError(error){
    if(error.nis != undefined){
        let elemet = document.getElementById("form-tambah-noinduk");
        let field = document.getElementById("validation-tambah-noinduk");
        elemet.classList.add("is-invalid");
        field.classList.add("invalid-feedback");
        field.innerHTML = error.nis[0];
    }
    if(error.email !=undefined){
        let elemet = document.getElementById("form-tambah-email");
        let field = document.getElementById("validation-tambah-email");
        elemet.classList.add("is-invalid");
        field.classList.add("invalid-feedback");
        field.innerHTML = error.email[0];
    }
}

function validateFormTambah(error) {
    var arrayId = ["nama", "noinduk", "email", 'kelas', 'username', 'password'];
    arrayId.forEach(element => {
        let elemet = document.getElementById("form-tambah-" + element);
        let field = document.getElementById("validation-tambah-" + element);
        if (element in error) {

            elemet.classList.add("is-invalid");
            field.classList.add("invalid-feedback");
            field.innerHTML = error[element];

        } else {

            elemet.classList.remove("is-invalid");
            field.classList.remove("invalid-feedback");
            elemet.classList.add("is-valid");
            field.classList.add("valid-feedback");
            field.innerHTML = "Sudah benar!";

        }

    })
}
function clearValidate() {
    var arrayId = ["nama", "noinduk", "email", 'kelas', 'username', 'password'];
    arrayId.forEach(element => {
        let elemet = document.getElementById("form-tambah-" + element);
        let field = document.getElementById("validation-tambah-" + element);
        elemet.classList.remove("is-invalid");
        field.classList.remove("invalid-feedback");
        elemet.classList.remove("is-valid");
        field.classList.remove("valid-feedback");
        field.innerHTML = "";
    })
}
function siswaDelete(id) {
    deletePrompt.fire({
        title: 'Apakah anda yakin!',
        text: "Data siswa yang dihapus tidak akan bisa dikembalikan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Hapus',
        cancelButtonText: 'Batal',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            axios.delete(`${baseUrl}/siswa/delete/${id}`)
                .then(function (response) {
                    Toast.fire({
                        icon: 'success',
                        title: 'Berhasil menghapus!'
                    })
                    dataTable.ajax.reload();
                })
                .catch(function (error) {
                    Toast.fire({
                        icon: 'error',
                        title: 'Terjadi kesalahan, Gagal menghapus!'
                    })
                })
        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire(
                'dibatalkan',
                'data siswa anda aman :)',
                'error'
            )
        }
    })

}

function siswaEdit(id) {

    modal_title.innerHTML = "Edit Siswa";
    modal_tambah_button.classList.add("d-none");
    modal_edit_button.classList.remove("d-none");
    axios.get(`${baseUrl}/siswa/edit/${id}`)
        .then(function (response) {
            var data = response.data;

            console.log(data);
            let nama = document.getElementById("form-tambah-nama");
            let nis = document.getElementById("form-tambah-noinduk");
            let email = document.getElementById("form-tambah-email");
            let kelas = document.querySelectorAll("#form-tambah-kelas > option");
            let username = document.getElementById("form-tambah-username");
            let id = document.getElementById("idn");

            nama.value = data.siswa.nama;
            nis.value = data.siswa.noinduk;
            email.value = data.siswa.email;

            kelas.forEach(element => {
                if (element.value == data.siswa.kelas) {
                    element.selected = true;
                }
            });

            username.value = data.user.username;
            id.value = data.user.id;

            modal_tambah.show();

        }
        )
}

modal_edit_button.addEventListener("click", (e) => {
    const data = new FormData(formData);

    axios.post(`${baseUrl}/siswa/update/${idn.value}`, data)
        .then(function (response) {
            modal_tambah.hide();
            formData.reset();
            Toast.fire({
                icon: 'success',
                title: 'Perubahan disimpan!'
            });
            dataTable.ajax.reload();
        })
        .catch(function (error) {
            if (error.response) {
             
                validateFormTambah(error.response.data.errors)
                Toast.fire({
                    icon: 'error',
                    title: "<b> Kesalahan </b> : " + error.response.data.message
                });

            } else if (error.request) {
                Toast.fire({
                    icon: 'kesalahan',
                    title: 'Koneksi anda tidak stabil, refresh halaman!',
                });
            } else {
                Toast.fire({
                    icon: 'kesalahan',
                    title: 'terjadi kesalahan!',
                });
            }
        })
})