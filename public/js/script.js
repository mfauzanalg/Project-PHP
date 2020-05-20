console.log("fauzan");

// dataController to create new data
var dataController = (function(){
    var Content = function(tanggal, masuk, keluar, kendala, pekerjaan, durasi){
        this.tanggal = tanggal;
        this.masuk = masuk;
        this.keluar = keluar;
        this.kendala = kendala;
        this.pekerjaan = pekerjaan;
        this.durasi = durasi;
    }

    // Filter for break time
    var filterDurasiNormal = function(jamMasuk, jamKeluar){
        var durasi, totalMasuk, totalKeluar;
        if(jamMasuk[0] == 12 || jamMasuk[0] == 16 || jamMasuk[0] == 18){
            jamMasuk[0]++;
            jamMasuk[1] = 0;
        }
    
        if(jamKeluar[0] == 12 || jamKeluar[0] == 16 || jamKeluar[0] == 18){
            jamKeluar[0]++;
            jamKeluar[1] = 0;
        }
    
        totalMasuk = parseFloat(jamMasuk[0])*60 + parseFloat(jamMasuk[1]);
        totalKeluar = parseFloat(jamKeluar[0])*60 + parseFloat(jamKeluar[1]);
        durasi = totalKeluar - totalMasuk;
    
        if(jamMasuk[0] <= 12 && jamKeluar[0] >= 13){
            durasi -= 60;
        }
        if(jamMasuk[0] <= 16 && jamKeluar[0] >= 17){
            durasi -= 60;
        }
        if(jamMasuk[0] <= 18 && jamKeluar[0] >= 19){
            durasi -= 60;
        }
    
        return convertToHour(durasi);
    
    }
    
    // Convert minutes given to hour and minute format
    var convertToHour = function(minutes){
        if (minutes >= 0){
            var hour, minute, result;
            hour = minute = result = "";
            hour = Math.floor(minutes / 60);
            minute = minutes % 60;
            if (hour == 0 && minute == 0){
                result = "belum bekerja";
            } else if (hour == 0){
                result = minute + " menit";
            } else if (minute == 0){
                result = hour + " jam";
            } else{
                result = hour + " jam " + minute + " menit";
            }
            
        } else if(minutes < 0){
            result = "Tidak bisa bekerja melewati satu hari";
        } else{
            result = "";
        }
        
        return result;
    }

    var data = [];

    return{
        // Add data to data[]
        addData: function(tanggal, masuk, keluar, kendala, pekerjaan, durasi){
            var newData;
            newData = new Content(tanggal, masuk, keluar, kendala, pekerjaan, durasi);
            data.push(newData);
            
            return newData;
        },

        // Calculate duration from jam masuk dan jam pulang
        CalcDurasi : function(masuk, keluar){
            var durasi, jamMasuk, jamKeluar;
            jamMasuk = masuk.split(":");
            jamKeluar = keluar.split(":");
        
            durasi = filterDurasiNormal(jamMasuk, jamKeluar);
        
            return durasi;
        }

    }
})();

// User Interface Controller
var UIController = (function(){
    // DOM selector
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
        // Get string from input fields
        getInput: function(){
            return{
                kendala: document.querySelector(DOMStrings.inputKendala).value,
                pekerjaan: document.querySelector(DOMStrings.inputPekerjaan).value,
                jamMasuk: document.querySelector(DOMStrings.inputMasuk).value,
                jamKeluar: document.querySelector(DOMStrings.inputKeluar).value,
                tanggal: document.querySelector(DOMStrings.inputTanggal).value
            }
        },

        // Insert data to the output table
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

        // Clear fields after user press Submit button
        clearFields: function(){
            var fields, fieldsArr;
            fields = document.querySelectorAll(DOMStrings.inputKendala + ', ' + DOMStrings.inputPekerjaan + ', ' + DOMStrings.inputMasuk + ', ' + DOMStrings.inputKeluar + ', ' + DOMStrings.inputTanggal);
            fieldsArr = Array.prototype.slice.call(fields); // Return array from list
            
            fieldsArr.forEach(function(current, index, array){
                current.value = '';
            });

        }
    }
})();

// Global App Controller
var controller = (function(dataCtrl, UICtrl){
    // Submit using submit button or by pressing enter key
    var setupEventListener = function(){
        var DOM = UIController.getDOMStrings();

        document.querySelector(DOM.submitButton).addEventListener('click', ctrlAddItem);
        document.addEventListener('keypress', function(event){
            if (event.keyCode === 13 || event.which === 13){
                ctrlAddItem();
            }
        });
    };

    // Add Item to database and UI
    var ctrlAddItem = function (){
        var input, newItem;

        // Get the field input data
        input = UICtrl.getInput();

        // Add the item to the data controller
        newItem = dataCtrl.addData(input.tanggal, input.jamMasuk, input.jamKeluar, input.kendala, input.pekerjaan, dataCtrl.CalcDurasi(input.jamMasuk, input.jamKeluar));

        // Add the item to the UI
        UICtrl.addListData(newItem);

        // Clear Fields
        UICtrl.clearFields();
        
        // Alert
        alert('The data has been submitted, please look at the table below');
    };

    return{
        init: function(){
            setupEventListener();
        }
    }

})(dataController, UIController);

// Initialize App
controller.init();