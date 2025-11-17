x1 = 0,
y1 = 0,
x2 = 0,
y2 = 0;

var elementNow = null;
var elementTargetNow = null;
const cekjawaban_M1S5 =document.getElementById('M1S5')
const resetjawaban =document.getElementById('M1S5_reset')

var jawaban_menjodohkan = [
   
];

cekjawaban_M1S5
.addEventListener("click", function(){
    var benar=0
    jawaban_menjodohkan.forEach(element => {
        if(element.benar){
            benar+=1
        }
        
    });
    if (benar===6){
        Swal.fire(
            'Kerja Bagus!',
            'Jawaban anda Benar!',
            'success'
        )
    }
    else {
            Swal.fire(
                'Upss!',
                'Jawaban anda belum tepat!',
                'error'
            )
        }
})

resetjawaban
.addEventListener("click", function(){
    $("#rPaper").empty();
    var radio=$(":checkbox")
    console.log(radio);

    for (let index = 0; index < radio.length; index++) {
        const element = radio[index];
        element.disabled = false
        element.checked = false
        console.log(element)
        
    }
    // radio.forEach(element => {
    //     element.disabled=false
    //     element.removeAttr('chaked')

    // });
})




// ini daftar soal
var daftar_Soal = {
    soal: "Pasangkan setiap komponen berikut sesuai dengan portnya",
    opsi: [
        ["berlatih.png", "13,2"],
        ["berlatih.png", "6"],
        ["berlatih.png", "75"],
        ["berlatih.png", "96"],
        ["berlatih.png", "65"],
        ["berlatih.png", "12"]
    ],
    jawaban_menjodohkan: [],
}


renderSoal(daftar_Soal);


function renderSoal(Soal) {
    


    var opsi = Soal.opsi;
    var jodoh = [];

    for (let i = 0; i < opsi.length; i++) {
        jodoh.push(opsi[i][1]);

    }
    for (let i = jodoh.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [jodoh[i], jodoh[j]] = [jodoh[j], jodoh[i]];
    }

    // for (let i = 0; i < opsi.length; i++) {
    //     console.log(opsi[i]);
    //     element.innerHTML += `
    //                             <div class="d-flex justify-content-between">
    //                         <div class="card m-3" data-value="hello world" style="width: 12rem;">
    //                             <div class="card-body d-flex align-items-baseline align-self-start flex-row">
    //                                 <p class="m-2">`+ opsi[i][0] + `</p>
    //                                 <input type="checkbox" onclick="checkPoint(this)" value="`+ opsi[i][1] + `" class="btn-check" id="btn-check-` + i + `"
    //                                     autocomplete="off">
    //                                 <label class="btn btn-primary" for="btn-check-`+ i + `">X</label>
    //                             </div>
    //                         </div>
    //                         <div class="card m-3" data-value="hello world" style="width: 18rem;">
                                
    //                             <div
    //                                 class="card-body d-flex justify-content-between align-items-baseline align-self-start flex-row-reverse">
    //                                 <p class="m-2">`+ opsi[i][1] + `</p>
    //                                 <div class="">
    //                                     <input type="checkbox" class="btn-check" value="`+ opsi[i][1] + `" onclick="drawLine(this)" id="pilihan-` + i + `"
    //                                         autocomplete="off">
    //                                     <label class="btn btn-primary" for="pilihan-`+ i + `">X</label>
    //                                 </div>

    //                             </div>
    //                         </div>
    //             </div>
    //        `

    // }
}

document.addEventListener("mousedown", (e) => {
    // x1 = e.offsetX;
    // y1 = e.offsetY;
    // drawnode(x1, y1)
});
document.addEventListener("mouseup", (e) => {
    //    -----------------------
    // var rect = e.getBoundingClientRect();
    // x2 = rect.x;
    // y2 = rect.y;
    // ------------------
    // console.log("mouse cordinate : "+ x2 + " | " +y2);
    // drawline(x1, y1, x2, y2);
    // drawnode(e.offsetX, e.offsetY)
})
document.addEventListener("mousemove", (e) => {
    // followNode(e.offsetX, e.offsetY);
})
document.addEventListener("drag", (e) => {
    // x2 = e.offsetX;
    // y2 = e.offsetY;
    // // drawline(x1, y1, x2, y2);
    // drawnode(e.offsetX, e.offsetY)
})
function checkjawaban() {
    var nilai = 0;
    for (let index = 0; index < jawaban.length; index++) {
        let element = jawaban[index];
        if (element[2] == true) {
            nilai++;
        }
    }
    var result = nilai / daftar_Soal.opsi.length * 100;
    alert("Nilai anda adalah: " + result);
}
function checkPoint(checkbox) {
    // console.log(checkbox);
    if (checkbox.checked) {
        elementNow = checkbox;
        checkbox.disabled = true;
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop
        var scrollleft = window.pageXOffset || document.documentElement.scrollLeft

        var checkboxRect = checkbox.getBoundingClientRect();
        jawabanSementara = checkbox.value;
        var label = document.querySelector('label[for="' + checkbox.getAttribute('id') + '"]');

        var labelRect = checkbox.getBoundingClientRect();
        x1 = labelRect.left;
        y1 = labelRect.top;


        var width = checkbox.offsetWidth / 2;
        var height = checkbox.offsetHeight / 2;


        var startX = x1 + width;
        var startY = y1 + height;

        x1 = startX + scrollleft;
        y1 = startY + scrollTop;

        console.log("Posisi X: " + startX + ", Posisi Y: " + startY);
    } else {
        console.log("not checked");

    }

}
function drawLine(checkbox) {
    // console.log(checkbox);
    var label = document.querySelector('label[for="' + checkbox.getAttribute('id') + '"]');
    elementTargetNow = checkbox;
    checkbox.disabled = true;
    console.log(elementNow.id,elementTargetNow.value);
    var isbenar = false;
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop
    var scrollleft = window.pageXOffset || document.documentElement.scrollLeft
    var isbenar;
    if (elementNow.id === elementTargetNow.value) {
        isbenar = true;
    } else {
        isbenar = false;
    }
    jawaban_menjodohkan.push({
        id_element : elementNow.id, 
        id_target : elementTargetNow.id,
        value_target : elementTargetNow.value, 
        benar :isbenar})

    console.log(jawaban_menjodohkan)
    var labelRect = checkbox.getBoundingClientRect();
    x2 = labelRect.left;
    y2 = labelRect.top;

    var width = checkbox.offsetWidth / 2;
    var height = checkbox.offsetHeight / 2;

    var startX = x2 + width;
    var startY = y2 + height;

    x2 = startX + scrollleft;
    y2 = startY + scrollTop;

    console.log("tujuan :"+"Posisi X: " + startX + ", Posisi Y: " + startY);
    console.log(x1,y1,x2,y2);
    drawline(x1, y1, x2, y2);

}
function followNode(x, y) {
    var node = $("#circle-follow")

    var width = node.width();
    var height = node.height();

    var centerX = width / 2;
    var centerY = height / 2;

    var startX = x - centerX;
    var startY = y - centerY;


    node.css("left", startX).css("top", startY);
}
function drawnode(x, y) {

    var ele = ""
    var style = "";
    style += "position:absolute;";
    style += "z-index:100;"
    ele += "<div class='circle' style=" + style + ">";
    // ele += "<span> Test Node</span>"
    ele += "<div>"

    $('#rPaper').show();
    var node = $(ele).appendTo('#rPaper');
    var width = node.width();
    var height = node.height();

    var centerX = width / 2;
    var centerY = height / 2;

    var startX = x - centerX;
    var startY = y - centerY;

    node.css("left", startX).css("top", startY);

}

function drawline(ax, ay, bx, by) {
 
    if (ax > bx) {
        bx = ax + bx;
        ax = bx - ax;
        bx = bx - ax;
        by = ay + by;
        ay = by - ay;
        by = by - ay;
    }


    // console.log('ax: ' + ax);
    // console.log('ay: ' + ay);
    // console.log('bx: ' + bx);
    // console.log('by: ' + by);

    var angle = Math.atan((ay - by) / (bx - ax));
    // console.log('angle: ' + angle);

    angle = (angle * 180 / Math.PI);
    // console.log('angle: ' + angle);
    angle = -angle;
    // console.log('angle: ' + angle);

    var length = Math.sqrt((ax - bx) * (ax - bx) + (ay - by) * (ay - by));
    // console.log('length: ' + length);

    var style = ""
    style += "left:" + (ax) + "px;"
    style += "top:" + (ay) + "px;"
    style += "width:" + length + "px;"
    style += "height:1px;"
    style += "background-color:black;"
    style += "position:absolute;"
    style += "transform:rotate(" + angle + "deg);"
    style += "-ms-transform:rotate(" + angle + "deg);"
    style += "transform-origin:0% 0%;"
    style += "-moz-transform:rotate(" + angle + "deg);"
    style += "-moz-transform-origin:0% 0%;"
    style += "-webkit-transform:rotate(" + angle + "deg);"
    style += "-webkit-transform-origin:0% 0%;"
    style += "-o-transform:rotate(" + angle + "deg);"
    style += "-o-transform-origin:0% 0%;"
    style += "-webkit-box-shadow: 0px 0px 2px 2px rgba(0, 0, 0, .1);"
    style += "box-shadow: 0px 0px 2px 2px rgba(0, 0, 0, .1);"
    style += "z-index:99;"
    $("<div style='" + style + "'></div>").appendTo('#rPaper');
}
