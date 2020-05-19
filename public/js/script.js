console.log("fauzan");

// dataController
var dataController = (function(){
    var Content = function(tanggal, masuk, keluar, kendala, pekerjaan, durasi){
        this.tanggal = tanggal;
        this.masuk = masuk;
        this.keluar = keluar;
        this.kendala = kendala;
        this.pekerjaan = pekerjaan;
        this.durasi = durasi;
    }

    var data = [];

    return{
        addData: function(tanggal, masuk, keluar, kendala, pekerjaan, durasi){
            var newData;
            newData = new Content(tanggal, masuk, keluar, kendala, pekerjaan, durasi);
            data.push(newData);
            
            return newData;
        }
    }
})();

// UIController
var UIController = (function(){
    var DOMStrings = {
        inputKendala: '.input_kendala',
        inputPekerjaan: '.input_pekerjaan',
        submitButton: '.submit_button',
        inputMasuk: '.jam_masuk',
        inputKeluar: '.jam_keluar',
        inputTanggal: '.tanggal',
        tableContent: '.table_content'
    };

    return{
        getInput: function(){
            return{
                kendala: document.querySelector(DOMStrings.inputKendala).value,
                pekerjaan: document.querySelector(DOMStrings.inputPekerjaan).value,
                jamMasuk: document.querySelector(DOMStrings.inputMasuk).value,
                jamKeluar: document.querySelector(DOMStrings.inputKeluar).value,
                tanggal: document.querySelector(DOMStrings.inputTanggal).value
            }
        },

        addListData: function(obj){
            var table, row;
            table = document.getElementById('output');
            row = table.insertRow(0);
            row.insertCell(0).innerHTML = obj.tanggal;
            row.insertCell(1).innerHTML = obj.masuk;
            row.insertCell(2).innerHTML = obj.keluar;
            row.insertCell(3).innerHTML = obj.pekerjaan;
            row.insertCell(4).innerHTML = obj.kendala;
            row.insertCell(5).innerHTML = obj.durasi;
            
        },

        getDOMStrings: function(){
            return DOMStrings;
        },

        claerFields: function(){
            var fields, fieldsArr;
            fields = document.querySelectorAll(DOMStrings.inputKendala + ', ' + DOMStrings.inputPekerjaan);
            fieldsArr = Array.prototype.slice.call(fields); // Return array from list
            
            fieldsArr.forEach(function(current, index, array){
                current.value = '';
            });

        }
    }
})();

// Global App Controller
var controller = (function(dataCtrl, UICtrl){
    var setupEventListener = function(){
        var DOM = UIController.getDOMStrings();

        document.querySelector(DOM.submitButton).addEventListener('click', ctrlAddItem);
        document.addEventListener('keypress', function(event){
            if (event.keyCode === 13 || event.which === 13){
                ctrlAddItem();
            }
        });
    };

    var ctrlAddItem = function (){
        var input, newItem;

        // Get the field input data
        input = UICtrl.getInput();

        // Add the item to the data controller
        newItem = dataCtrl.addData(input.tanggal, input.jamMasuk, input.jamKeluar, input.kendala, input.pekerjaan, 'nanti ada fungsi');
        console.log(newItem);

        // Add the item to the UI
        UICtrl.addListData(newItem);

        // Clear Fields
        UICtrl.claerFields();
        
        // Alert
        alert('Data tersubmit, silakan liat di halaman output');
    };

    return{
        init: function(){
            setupEventListener();
        }
    }

})(dataController, UIController);

controller.init();

var Durasi = function(masuk, keluar){
    var durasi, jamMasuk, jamKeluar, totalMasuk, totalKeluar, totalMinute;
    jamMasuk = masuk.split(":");
    jamKeluar = keluar.split(":");
    totalMasuk = parseFloat(jamMasuk[0])*60 + parseFloat(jamMasuk[1]);
    totalKeluar = parseFloat(jamKeluar[0])*60 + parseFloat(jamKeluar[1]);

    totalMinute = totalKeluar - totalMasuk;

    
    return convertToHour(totalMinute);
}

var convertToHour = function(minutes){
    var hour, minute, result;
    hour = minute = "";
    hour = Math.floor(minutes / 60);
    minute = minutes % 60;
    
    if (hour == 0){
        result = minute + " menit";
    } else if (minute == 0){
        result = hour + " jam";
    } else if (hour == 0 && minute == 0){
        result = "belum bekerja";
    } else{
        result = hour + " jam " + minute + " menit";
    }

    return result;
}

console.log(Durasi('16:23','17:23'));