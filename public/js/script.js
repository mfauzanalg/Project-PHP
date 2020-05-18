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
        inputTanggal: '.tanggal'
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