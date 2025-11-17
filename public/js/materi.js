 document.addEventListener("click", function(target) {

            const element = target.target;
            if (element.classList.contains("cekjawaban")) {
                checkJawaban(element.value);
            }
        })

        function checkJawaban(id) {
            const penjelasan = document.getElementById("penjelasan_" + id);
            let jawabanBenar = jawaban[id]
            let jawabanUser = document.querySelectorAll("." + id)

            
            // console.log(penjelasan);
            // console.log(jawabanBenar);
            // console.log(jawabanUser);
            var index = 0;
            var benar = 0;
            jawabanBenar.forEach(element => {
                const inputUser = jawabanUser[index]
                inputUser.classList.remove("border-success", "border-danger")
                if (inputUser.value.toLocaleLowerCase() === element) {
                    inputUser.classList.add("border-success")
                    benar++;
                } else {
                    inputUser.classList.add("border-danger")
                }
                index += 1
            });

            if (benar === jawabanBenar.length) {
                feedback(true);
                if(penjelasan!=null){
                    penjelasan.classList.remove("d-none");
                }
            } else {
                feedback(false);
            }
        }

        function feedback(success) {

            if (success) {
                Swal.fire(
                    'Kerja Bagus!',
                    'Jawaban anda Benar!',
                    'success'
                )
            } else {
                Swal.fire(
                    'Upss!',
                    'Jawaban anda belum tepat!',
                    'error'
                )
            }

        }

        var toggle = document.getElementById("tombol-tujuan");
        var content = document.getElementById("isi-tujuan");
        
        toggle.addEventListener("click", function () {
          if (content.style.display === "none") {
            content.style.display = "block"; // Menampilkan konten
          } else {
            content.style.display = "none"; // Menyembunyikan konten
          }
        });
