       var $pelican = jQuery.noConflict();
        $pelican(function () {
            //Default Check-In Date
            var dtCiDate = new Date();
            var dtCoDate = new Date();
            dtCiDate.setDate(dtCiDate.getDate() + _intDefaultCi);
            dtCoDate.setDate(dtCoDate.getDate() + _intDefaultCi + _intDefaultLOS);
            $pelican("#txtCi").val(getDate(dtCiDate));
            $pelican("#txtCo").val(getDate(dtCoDate));
            $pelican("#txtRoom").val(_intDefaultRoom);
            $pelican("#txtAdult").val(_intDefaultAdult);
            $pelican("#txtChild").val(_intDefaultChild);

            $pelican("#txtCi").datepicker({
                minDate: -0, onSelect: function (dateText, inst) {
                    var dtTemp = new Date(dateText);
                    dtTemp.setDate(dtTemp.getDate() + _intDefaultLOS);
                    var dtCheckOut = getDate(dtTemp);
                    $pelican("#txtCo").val(dtCheckOut);
                }
            });
            $pelican("#txtCo").datepicker({ minDate: -0 });
        });

        function getDate(p_dtTemp) {
            var dtTemp = ((p_dtTemp.getMonth() + 1) < 10 ? "0" : "") + (p_dtTemp.getMonth() + 1) + "/" +
                          (p_dtTemp.getDate() < 10 ? "0" : "") + p_dtTemp.getDate() + "/" +
                          p_dtTemp.getFullYear();
            return dtTemp;
        }

        function getTrim(param) {
            var value = param
            while (value.substring(0, 1) == ' ') {
                value = value.substring(1, value.length);
            }
            while (value.substring(value.length - 1, value.length) == ' ') {
                value = value.substring(0, value.length - 1);
            }
            return value;
        }

        function allowNumericOnly(p_objText) {
            var v_regExp = /^\d+$/;
            var v_strTemp;

            with (p_objText) {
                if (value.length < 2) {
                    v_strTemp = value;
                    if (!v_regExp.test(v_strTemp)) value = "";
                }
                else {
                    v_strTemp = value.substring(0, 1);
                    if (!v_regExp.test(v_strTemp)) value = value.substring(1, value.length);

                    v_strTemp = value.substring(value.length - 1);
                    if (!v_regExp.test(v_strTemp)) value = value.substring(0, value.length - 1);

                    if (!v_regExp.test(value)) {

                        v_strTemp = "";
                        for (var v_intCounter = 0; v_intCounter < value.length; v_intCounter++) {
                            if (v_regExp.test(value.substring(v_intCounter, v_intCounter + 1))) v_strTemp += value.substring(v_intCounter, v_intCounter + 1);
                        }
                        value = v_strTemp;
                    }
                }
            }
            return true;
        }

        function fRetrieve() {
            window.location = _strPath + "BE/MpHotelList.aspx?langcd=en&htlcccode=" + _strHtlCCCode +
                                  "&type=E" + "&mode=retrieve";
        }

        function fSearch() {
            var objCi = document.getElementById("txtCi");
            var objCo = document.getElementById("txtCo");
            var strMess = "";

            if (document.getElementById("slcHotel").value == "") strMess += "Please select Hotel \n";
            if (objCi.value == "") strMess += "Please enter Check-In Date \n";
            if (objCo.value == "") strMess += "Please enter Check-Out Date \n";
            if (objCi.value != "" && objCo.value != "") {
                var dteCi = objCi.value.substr(6, 4) + objCi.value.substr(0, 2) + objCi.value.substr(3, 2);
                var dteCo = objCo.value.substr(6, 4) + objCo.value.substr(0, 2) + objCo.value.substr(3, 2);
                var dteServer = new Date().getFullYear().toString() +
                                (parseFloat(new Date().getMonth() + 1) < 10 ?
                                    "0" + parseFloat(new Date().getMonth() + 1).toString() :
                                    parseInt(new Date().getMonth() + 1).toString()) +
                                (parseFloat(new Date().getDate()) < 10 ?
                                    "0" + new Date().getDate().toString() :
                                    new Date().getDate().toString());

                if (parseFloat(dteCi) < parseFloat(dteServer)) {
                    strMess += "Check-In date should be later than or the same as " + new Date().toDateString("MMM dd, yyyy") + " \n";
                }
                else if (parseFloat(dteCi) > parseFloat(dteCo)) {
                    strMess += "Check-Out Date should be later than Check-In Date \n";
                }
            }

            if (strMess != "") {
                alert(strMess);
            }
            else {
				var strRoom = document.getElementById("txtRoom").value;
                var strAdult = document.getElementById("txtAdult").value;
                var strChild = document.getElementById("txtChild").value;
                var strPromoCd = document.getElementById("txtAccessCd").value;
                var strCi = document.getElementById("txtCi").value;
                var strCo = document.getElementById("txtCo").value;
				
				if(document.getElementById("slcHotel").value.substring(0, 2) == "CI" ){
					var strHotelCd = "";
					var strCityCd = document.getElementById("slcHotel").value;
				}
				else{
					var strHotelCd = (document.getElementById("slcHotel").value == "ALL" ? "" : document.getElementById("slcHotel").value);
					var strCityCd = "";
				}

				if(strHotelCd == ""){
					window.location = _strPath + "Booking/Index.aspx?langcd=en&htlcccode=" + _strHtlCCCode +
					"&ci=" + strCi + "&co=" + strCo + "&room=" + strRoom + "&adult=" + strAdult +
					"&child=" + strChild + "&city=" + strCityCd +
					"&hotelcd=" + strHotelCd + "&promocd=" + strPromoCd + "&type=E" + "&backurl=" + _strBackurl;
				}
				else{
					window.location = _strPath + "Booking/Portal.aspx?langcd=en&htlcccode=" + _strHtlCCCode +
					"&ci=" + strCi + "&co=" + strCo + "&room=" + strRoom + "&adult=" + strAdult +
					"&child=" + strChild + "&city=" + strCityCd +
					"&hotelcd=" + strHotelCd + "&promocd=" + strPromoCd + "&type=E" + "&backurl=" + _strBackurl;
				}
            }
        }

        $pelican = jQuery.noConflict(true);